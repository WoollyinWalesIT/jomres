
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
o
m
r
e
s
_
p
a
g
i
n
a
t
i
o
n

{

 
 
 
 
c
o
n
s
t
 
N
U
M
_
P
L
A
C
E
H
O
L
D
E
R
 
=
 
'
(
:
n
u
m
)
'
;


 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
t
o
t
a
l
I
t
e
m
s
;

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
n
u
m
P
a
g
e
s
;

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
i
t
e
m
s
P
e
r
P
a
g
e
;

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
c
u
r
r
e
n
t
P
a
g
e
;

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
u
r
l
P
a
t
t
e
r
n
;

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
m
a
x
P
a
g
e
s
T
o
S
h
o
w
 
=
 
1
0
;

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
p
r
e
v
i
o
u
s
T
e
x
t
 
=
 
'
P
r
e
v
i
o
u
s
'
;

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
n
e
x
t
T
e
x
t
 
=
 
'
N
e
x
t
'
;


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
i
n
t
 
 
 
 
$
t
o
t
a
l
I
t
e
m
s
 
 
 
T
h
e
 
t
o
t
a
l
 
n
u
m
b
e
r
 
o
f
 
i
t
e
m
s

 
 
 
 
 
*
 
@
p
a
r
a
m
 
i
n
t
 
 
 
 
$
i
t
e
m
s
P
e
r
P
a
g
e
 
T
h
e
 
n
u
m
b
e
r
 
o
f
 
i
t
e
m
s
 
p
e
r
 
p
a
g
e

 
 
 
 
 
*
 
@
p
a
r
a
m
 
i
n
t
 
 
 
 
$
c
u
r
r
e
n
t
P
a
g
e
 
 
T
h
e
 
c
u
r
r
e
n
t
 
p
a
g
e
 
n
u
m
b
e
r

 
 
 
 
 
*
 
@
p
a
r
a
m
 
s
t
r
i
n
g
 
$
u
r
l
P
a
t
t
e
r
n
 
 
 
A
 
U
R
L
 
f
o
r
 
e
a
c
h
 
p
a
g
e
,
 
w
i
t
h
 
(
:
n
u
m
)
 
a
s
 
a
 
p
l
a
c
e
h
o
l
d
e
r
 
f
o
r
 
t
h
e
 
p
a
g
e
 
n
u
m
b
e
r
.
 
E
x
.
 
'
/
f
o
o
/
p
a
g
e
/
(
:
n
u
m
)
'

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
$
t
o
t
a
l
I
t
e
m
s
,
 
$
i
t
e
m
s
P
e
r
P
a
g
e
,
 
$
c
u
r
r
e
n
t
P
a
g
e
,
 
$
u
r
l
P
a
t
t
e
r
n
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
t
a
l
I
t
e
m
s
 
=
 
$
t
o
t
a
l
I
t
e
m
s
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
t
e
m
s
P
e
r
P
a
g
e
 
=
 
$
i
t
e
m
s
P
e
r
P
a
g
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
=
 
$
c
u
r
r
e
n
t
P
a
g
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
r
l
P
a
t
t
e
r
n
 
=
 
$
u
r
l
P
a
t
t
e
r
n
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
p
d
a
t
e
N
u
m
P
a
g
e
s
(
)
;

 
 
 
 
}


 
 
 
 
p
r
o
t
e
c
t
e
d
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
N
u
m
P
a
g
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
 
=
 
(
$
t
h
i
s
-
>
i
t
e
m
s
P
e
r
P
a
g
e
 
=
=
 
0
 
?
 
0
 
:
 
(
i
n
t
)
 
c
e
i
l
(
$
t
h
i
s
-
>
t
o
t
a
l
I
t
e
m
s
 
/
 
$
t
h
i
s
-
>
i
t
e
m
s
P
e
r
P
a
g
e
)
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
i
n
t
 
$
m
a
x
P
a
g
e
s
T
o
S
h
o
w

 
 
 
 
 
*

 
 
 
 
 
*
 
@
t
h
r
o
w
s
 
\
I
n
v
a
l
i
d
A
r
g
u
m
e
n
t
E
x
c
e
p
t
i
o
n
 
i
f
 
$
m
a
x
P
a
g
e
s
T
o
S
h
o
w
 
i
s
 
l
e
s
s
 
t
h
a
n
 
3

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
M
a
x
P
a
g
e
s
T
o
S
h
o
w
(
$
m
a
x
P
a
g
e
s
T
o
S
h
o
w
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
m
a
x
P
a
g
e
s
T
o
S
h
o
w
 
<
 
3
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
\
I
n
v
a
l
i
d
A
r
g
u
m
e
n
t
E
x
c
e
p
t
i
o
n
(
'
m
a
x
P
a
g
e
s
T
o
S
h
o
w
 
c
a
n
n
o
t
 
b
e
 
l
e
s
s
 
t
h
a
n
 
3
.
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
x
P
a
g
e
s
T
o
S
h
o
w
 
=
 
$
m
a
x
P
a
g
e
s
T
o
S
h
o
w
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
i
n
t

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
M
a
x
P
a
g
e
s
T
o
S
h
o
w
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
m
a
x
P
a
g
e
s
T
o
S
h
o
w
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
i
n
t
 
$
c
u
r
r
e
n
t
P
a
g
e

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
C
u
r
r
e
n
t
P
a
g
e
(
$
c
u
r
r
e
n
t
P
a
g
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
=
 
$
c
u
r
r
e
n
t
P
a
g
e
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
i
n
t

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
C
u
r
r
e
n
t
P
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
i
n
t
 
$
i
t
e
m
s
P
e
r
P
a
g
e

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
I
t
e
m
s
P
e
r
P
a
g
e
(
$
i
t
e
m
s
P
e
r
P
a
g
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
t
e
m
s
P
e
r
P
a
g
e
 
=
 
$
i
t
e
m
s
P
e
r
P
a
g
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
p
d
a
t
e
N
u
m
P
a
g
e
s
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
i
n
t

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
t
e
m
s
P
e
r
P
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
i
t
e
m
s
P
e
r
P
a
g
e
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
i
n
t
 
$
t
o
t
a
l
I
t
e
m
s

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
T
o
t
a
l
I
t
e
m
s
(
$
t
o
t
a
l
I
t
e
m
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
t
a
l
I
t
e
m
s
 
=
 
$
t
o
t
a
l
I
t
e
m
s
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
p
d
a
t
e
N
u
m
P
a
g
e
s
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
i
n
t

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
T
o
t
a
l
I
t
e
m
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
o
t
a
l
I
t
e
m
s
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
i
n
t

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
N
u
m
P
a
g
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
s
t
r
i
n
g
 
$
u
r
l
P
a
t
t
e
r
n

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
U
r
l
P
a
t
t
e
r
n
(
$
u
r
l
P
a
t
t
e
r
n
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
r
l
P
a
t
t
e
r
n
 
=
 
$
u
r
l
P
a
t
t
e
r
n
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
s
t
r
i
n
g

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
U
r
l
P
a
t
t
e
r
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
u
r
l
P
a
t
t
e
r
n
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
i
n
t
 
$
p
a
g
e
N
u
m

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
s
t
r
i
n
g

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
P
a
g
e
U
r
l
(
$
p
a
g
e
N
u
m
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
t
r
_
r
e
p
l
a
c
e
(
s
e
l
f
:
:
N
U
M
_
P
L
A
C
E
H
O
L
D
E
R
,
 
$
p
a
g
e
N
u
m
,
 
$
t
h
i
s
-
>
u
r
l
P
a
t
t
e
r
n
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
N
e
x
t
P
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
<
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
+
 
1
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
P
r
e
v
P
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
-
 
1
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
N
e
x
t
U
r
l
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
-
>
g
e
t
N
e
x
t
P
a
g
e
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
g
e
t
P
a
g
e
U
r
l
(
$
t
h
i
s
-
>
g
e
t
N
e
x
t
P
a
g
e
(
)
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
s
t
r
i
n
g
|
n
u
l
l

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
P
r
e
v
U
r
l
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
-
>
g
e
t
P
r
e
v
P
a
g
e
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
g
e
t
P
a
g
e
U
r
l
(
$
t
h
i
s
-
>
g
e
t
P
r
e
v
P
a
g
e
(
)
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
G
e
t
 
a
n
 
a
r
r
a
y
 
o
f
 
p
a
g
i
n
a
t
e
d
 
p
a
g
e
 
d
a
t
a
.

 
 
 
 
 
*

 
 
 
 
 
*
 
E
x
a
m
p
l
e
:

 
 
 
 
 
*
 
a
r
r
a
y
(

 
 
 
 
 
*
 
 
 
 
 
a
r
r
a
y
 
(
'
n
u
m
'
 
=
>
 
1
,
 
 
 
 
 
'
u
r
l
'
 
=
>
 
'
/
e
x
a
m
p
l
e
/
p
a
g
e
/
1
'
,
 
 
'
i
s
C
u
r
r
e
n
t
'
 
=
>
 
f
a
l
s
e
)
,

 
 
 
 
 
*
 
 
 
 
 
a
r
r
a
y
 
(
'
n
u
m
'
 
=
>
 
'
.
.
.
'
,
 
'
u
r
l
'
 
=
>
 
N
U
L
L
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
s
C
u
r
r
e
n
t
'
 
=
>
 
f
a
l
s
e
)
,

 
 
 
 
 
*
 
 
 
 
 
a
r
r
a
y
 
(
'
n
u
m
'
 
=
>
 
3
,
 
 
 
 
 
'
u
r
l
'
 
=
>
 
'
/
e
x
a
m
p
l
e
/
p
a
g
e
/
3
'
,
 
 
'
i
s
C
u
r
r
e
n
t
'
 
=
>
 
f
a
l
s
e
)
,

 
 
 
 
 
*
 
 
 
 
 
a
r
r
a
y
 
(
'
n
u
m
'
 
=
>
 
4
,
 
 
 
 
 
'
u
r
l
'
 
=
>
 
'
/
e
x
a
m
p
l
e
/
p
a
g
e
/
4
'
,
 
 
'
i
s
C
u
r
r
e
n
t
'
 
=
>
 
t
r
u
e
 
)
,

 
 
 
 
 
*
 
 
 
 
 
a
r
r
a
y
 
(
'
n
u
m
'
 
=
>
 
5
,
 
 
 
 
 
'
u
r
l
'
 
=
>
 
'
/
e
x
a
m
p
l
e
/
p
a
g
e
/
5
'
,
 
 
'
i
s
C
u
r
r
e
n
t
'
 
=
>
 
f
a
l
s
e
)
,

 
 
 
 
 
*
 
 
 
 
 
a
r
r
a
y
 
(
'
n
u
m
'
 
=
>
 
'
.
.
.
'
,
 
'
u
r
l
'
 
=
>
 
N
U
L
L
,
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
s
C
u
r
r
e
n
t
'
 
=
>
 
f
a
l
s
e
)
,

 
 
 
 
 
*
 
 
 
 
 
a
r
r
a
y
 
(
'
n
u
m
'
 
=
>
 
1
0
,
 
 
 
 
'
u
r
l
'
 
=
>
 
'
/
e
x
a
m
p
l
e
/
p
a
g
e
/
1
0
'
,
 
'
i
s
C
u
r
r
e
n
t
'
 
=
>
 
f
a
l
s
e
)
,

 
 
 
 
 
*
 
)

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
a
r
r
a
y

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
P
a
g
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
p
a
g
e
s
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
 
<
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
 
<
=
 
$
t
h
i
s
-
>
m
a
x
P
a
g
e
s
T
o
S
h
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
=
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
s
[
]
 
=
 
$
t
h
i
s
-
>
c
r
e
a
t
e
P
a
g
e
(
$
i
,
 
$
i
 
=
=
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
D
e
t
e
r
m
i
n
e
 
t
h
e
 
s
l
i
d
i
n
g
 
r
a
n
g
e
,
 
c
e
n
t
e
r
e
d
 
a
r
o
u
n
d
 
t
h
e
 
c
u
r
r
e
n
t
 
p
a
g
e
.

 
 
 
 
 
 
 
 
 
 
 
 
$
n
u
m
A
d
j
a
c
e
n
t
s
 
=
 
(
i
n
t
)
 
f
l
o
o
r
(
(
$
t
h
i
s
-
>
m
a
x
P
a
g
e
s
T
o
S
h
o
w
 
-
 
3
)
 
/
 
2
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
+
 
$
n
u
m
A
d
j
a
c
e
n
t
s
 
>
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
l
i
d
i
n
g
S
t
a
r
t
 
=
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
 
-
 
$
t
h
i
s
-
>
m
a
x
P
a
g
e
s
T
o
S
h
o
w
 
+
 
2
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
l
i
d
i
n
g
S
t
a
r
t
 
=
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
-
 
$
n
u
m
A
d
j
a
c
e
n
t
s
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
l
i
d
i
n
g
S
t
a
r
t
 
<
 
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
l
i
d
i
n
g
S
t
a
r
t
 
=
 
2
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
s
l
i
d
i
n
g
E
n
d
 
=
 
$
s
l
i
d
i
n
g
S
t
a
r
t
 
+
 
$
t
h
i
s
-
>
m
a
x
P
a
g
e
s
T
o
S
h
o
w
 
-
 
3
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
l
i
d
i
n
g
E
n
d
 
>
=
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
l
i
d
i
n
g
E
n
d
 
=
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
 
-
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
B
u
i
l
d
 
t
h
e
 
l
i
s
t
 
o
f
 
p
a
g
e
s
.

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
s
[
]
 
=
 
$
t
h
i
s
-
>
c
r
e
a
t
e
P
a
g
e
(
1
,
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
=
=
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
l
i
d
i
n
g
S
t
a
r
t
 
>
 
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
s
[
]
 
=
 
$
t
h
i
s
-
>
c
r
e
a
t
e
P
a
g
e
E
l
l
i
p
s
i
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
$
s
l
i
d
i
n
g
S
t
a
r
t
;
 
$
i
 
<
=
 
$
s
l
i
d
i
n
g
E
n
d
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
s
[
]
 
=
 
$
t
h
i
s
-
>
c
r
e
a
t
e
P
a
g
e
(
$
i
,
 
$
i
 
=
=
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
l
i
d
i
n
g
E
n
d
 
<
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
 
-
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
s
[
]
 
=
 
$
t
h
i
s
-
>
c
r
e
a
t
e
P
a
g
e
E
l
l
i
p
s
i
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
s
[
]
 
=
 
$
t
h
i
s
-
>
c
r
e
a
t
e
P
a
g
e
(
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
,
 
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
=
=
 
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
p
a
g
e
s
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
r
e
a
t
e
 
a
 
p
a
g
e
 
d
a
t
a
 
s
t
r
u
c
t
u
r
e
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
i
n
t
 
 
$
p
a
g
e
N
u
m

 
 
 
 
 
*
 
@
p
a
r
a
m
 
b
o
o
l
 
$
i
s
C
u
r
r
e
n
t

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
a
r
r
a
y

 
 
 
 
 
*
/

 
 
 
 
p
r
o
t
e
c
t
e
d
 
f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
P
a
g
e
(
$
p
a
g
e
N
u
m
,
 
$
i
s
C
u
r
r
e
n
t
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
'
n
u
m
'
 
=
>
 
$
p
a
g
e
N
u
m
,

 
 
 
 
 
 
 
 
 
 
 
 
'
u
r
l
'
 
=
>
 
$
t
h
i
s
-
>
g
e
t
P
a
g
e
U
r
l
(
$
p
a
g
e
N
u
m
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
i
s
C
u
r
r
e
n
t
'
 
=
>
 
$
i
s
C
u
r
r
e
n
t
,

 
 
 
 
 
 
 
 
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
a
r
r
a
y

 
 
 
 
 
*
/

 
 
 
 
p
r
o
t
e
c
t
e
d
 
f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
P
a
g
e
E
l
l
i
p
s
i
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
'
n
u
m
'
 
=
>
 
'
.
.
.
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
u
r
l
'
 
=
>
 
n
u
l
l
,

 
 
 
 
 
 
 
 
 
 
 
 
'
i
s
C
u
r
r
e
n
t
'
 
=
>
 
f
a
l
s
e
,

 
 
 
 
 
 
 
 
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
R
e
n
d
e
r
 
a
n
 
H
T
M
L
 
p
a
g
i
n
a
t
i
o
n
 
c
o
n
t
r
o
l
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
s
t
r
i
n
g

 
 
 
 
 
*
/

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
t
o
H
t
m
l
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
n
u
m
P
a
g
e
s
 
<
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
h
t
m
l
 
=
 
'
<
u
l
 
c
l
a
s
s
=
"
p
a
g
i
n
a
t
i
o
n
"
>
'
;

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
g
e
t
P
r
e
v
U
r
l
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
h
t
m
l
 
.
=
 
'
<
l
i
>
<
a
 
h
r
e
f
=
"
'
.
$
t
h
i
s
-
>
g
e
t
P
r
e
v
U
r
l
(
)
.
'
"
>
&
l
a
q
u
o
;
 
'
.
$
t
h
i
s
-
>
p
r
e
v
i
o
u
s
T
e
x
t
.
'
<
/
a
>
<
/
l
i
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
g
e
t
P
a
g
e
s
(
)
 
a
s
 
$
p
a
g
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
a
g
e
[
'
u
r
l
'
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
t
m
l
 
.
=
 
'
<
l
i
'
.
(
$
p
a
g
e
[
'
i
s
C
u
r
r
e
n
t
'
]
 
?
 
'
 
c
l
a
s
s
=
"
a
c
t
i
v
e
"
'
 
:
 
'
'
)
.
'
>
<
a
 
h
r
e
f
=
"
'
.
$
p
a
g
e
[
'
u
r
l
'
]
.
'
"
>
'
.
$
p
a
g
e
[
'
n
u
m
'
]
.
'
<
/
a
>
<
/
l
i
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
t
m
l
 
.
=
 
'
<
l
i
 
c
l
a
s
s
=
"
d
i
s
a
b
l
e
d
"
>
<
s
p
a
n
>
'
.
$
p
a
g
e
[
'
n
u
m
'
]
.
'
<
/
s
p
a
n
>
<
/
l
i
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
g
e
t
N
e
x
t
U
r
l
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
h
t
m
l
 
.
=
 
'
<
l
i
>
<
a
 
h
r
e
f
=
"
'
.
$
t
h
i
s
-
>
g
e
t
N
e
x
t
U
r
l
(
)
.
'
"
>
'
.
$
t
h
i
s
-
>
n
e
x
t
T
e
x
t
.
'
 
&
r
a
q
u
o
;
<
/
a
>
<
/
l
i
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
h
t
m
l
 
.
=
 
'
<
/
u
l
>
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
h
t
m
l
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
t
o
S
t
r
i
n
g
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
o
H
t
m
l
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
C
u
r
r
e
n
t
P
a
g
e
F
i
r
s
t
I
t
e
m
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
r
s
t
 
=
 
(
$
t
h
i
s
-
>
c
u
r
r
e
n
t
P
a
g
e
 
-
 
1
)
 
*
 
$
t
h
i
s
-
>
i
t
e
m
s
P
e
r
P
a
g
e
 
+
 
1
;


 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
r
s
t
 
>
 
$
t
h
i
s
-
>
t
o
t
a
l
I
t
e
m
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
f
i
r
s
t
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
C
u
r
r
e
n
t
P
a
g
e
L
a
s
t
I
t
e
m
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
f
i
r
s
t
 
=
 
$
t
h
i
s
-
>
g
e
t
C
u
r
r
e
n
t
P
a
g
e
F
i
r
s
t
I
t
e
m
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
r
s
t
 
=
=
=
 
n
u
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
l
a
s
t
 
=
 
$
f
i
r
s
t
 
+
 
$
t
h
i
s
-
>
i
t
e
m
s
P
e
r
P
a
g
e
 
-
 
1
;

 
 
 
 
 
 
 
 
i
f
 
(
$
l
a
s
t
 
>
 
$
t
h
i
s
-
>
t
o
t
a
l
I
t
e
m
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
o
t
a
l
I
t
e
m
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
l
a
s
t
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
P
r
e
v
i
o
u
s
T
e
x
t
(
$
t
e
x
t
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
e
v
i
o
u
s
T
e
x
t
 
=
 
$
t
e
x
t
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
N
e
x
t
T
e
x
t
(
$
t
e
x
t
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
n
e
x
t
T
e
x
t
 
=
 
$
t
e
x
t
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
;

 
 
 
 
}

}

