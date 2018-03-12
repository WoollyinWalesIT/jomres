
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
s
 
t
h
e
 
J
o
m
r
e
s
 
m
e
n
u
 
b
a
r
 
i
c
o
n
s
 
a
n
d
 
t
h
e
 
t
o
o
l
b
a
r
 
i
c
o
n
s
.
 
T
h
e
s
e
 
h
a
v
e
 
b
e
e
n
 
r
e
p
l
a
c
e
d
 
b
e
c
a
u
s
e
 
t
h
e
 
s
t
a
n
d
a
r
d
 
J
o
o
m
l
a
 
t
o
o
l
b
a
r
 
d
o
e
s
n
'
t
 
r
e
t
u
r
n
 
a
 
v
a
l
u
e
,
 
s
i
m
p
l
y
 
o
u
t
p
u
t
t
i
n
g
 
t
h
e
 
t
o
o
l
b
a
r
 
w
h
e
n
 
t
h
e
 
m
e
t
h
o
d
 
i
s
 
c
a
l
l
e
d
,
 
n
o
 
u
s
e
 
w
h
e
n
 
y
o
u
 
w
a
n
t
 
t
o
 
u
s
e
 
p
a
t
T
e
m
p
l
a
t
e
s
.

 
*
/

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
t
o
o
l
b
a
r
_
b
o
o
t
s
t
r
a
p

{

 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
o
n
s
t
r
u
c
t
o
r
.
 
G
e
n
e
r
a
t
e
s
 
t
h
e
 
i
m
a
g
e
s
 
b
a
s
e
d
 
o
n
 
h
a
r
d
 
c
o
d
e
d
 
a
r
r
a
y
s
,
 
a
n
d
 
s
e
t
s
 
t
h
e
 
l
i
v
e
s
i
t
e
 
a
n
d
 
i
c
o
n
 
s
i
z
e
s
.

 
 
 
 
 
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
v
e
s
i
t
e
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
n
d
a
r
d
A
c
t
i
v
i
t
y
I
m
a
g
e
s
 
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
S
t
a
n
d
a
r
d
A
c
t
i
v
i
t
y
I
m
a
g
e
s
A
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
e
n
u
b
a
r
I
m
a
g
e
s
A
r
r
a
y
 
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
M
e
n
u
b
a
r
I
m
a
g
e
s
A
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
S
i
z
e
 
=
 
'
s
m
a
l
l
'
;

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
e
d
i
t
i
c
o
n
s
i
z
e
'
 
]
)
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
m
a
g
e
S
i
z
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
e
d
i
t
i
c
o
n
s
i
z
e
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
m
a
g
e
E
x
t
e
n
s
i
o
n
 
=
 
'
p
n
g
'
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
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
I
n
s
e
r
t
s
 
a
 
s
p
a
c
e
r
 
c
e
l
l
 
i
n
t
o
 
t
h
e
 
t
o
o
l
b
a
r
.
 
P
a
s
s
 
i
n
 
a
 
w
i
d
t
h
 
t
o
 
s
e
t
 
y
o
u
r
 
w
i
d
t
h
.

 
 
 
 
 
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
p
a
c
e
r
(
$
w
i
d
t
h
 
=
 
4
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
b
l
a
n
k
.
p
n
g
'
;

 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
s
u
b
m
i
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
'

	
	
	
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
o
u
t
p
u
t
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
I
n
s
e
r
t
s
 
a
 
s
p
a
c
e
r
 
c
e
l
l
 
i
n
t
o
 
t
h
e
 
t
o
o
l
b
a
r
.
 
P
a
s
s
 
i
n
 
a
 
w
i
d
t
h
 
t
o
 
s
e
t
 
y
o
u
r
 
w
i
d
t
h
.

 
 
 
 
 
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
 
m
a
k
e
I
m
a
g
e
V
a
l
i
d
(
$
i
m
a
g
e
N
a
m
e
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
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
'
+
'
,
 
'
%
2
0
'
,
 
$
i
m
a
g
e
N
a
m
e
)
;

 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
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
'
%
2
F
'
,
 
'
/
'
,
 
$
i
m
a
g
e
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
i
m
a
g
e
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
A
l
l
o
w
s
 
f
o
r
 
c
u
s
t
o
m
 
t
o
o
l
b
a
r
 
i
t
e
m
s
.
 
S
e
t
 
$
i
m
a
g
e
 
t
o
 
t
h
e
 
f
u
l
l
 
p
a
t
h
 
f
r
o
m
 
t
h
e
 
r
o
o
t
 
o
f
 
l
i
v
e
s
i
t
e
.

 
 
 
 
 
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
 
c
u
s
t
o
m
T
o
o
l
b
a
r
I
t
e
m
(
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
$
t
e
x
t
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
,
 
$
s
u
b
m
i
t
T
a
s
k
,
 
$
i
m
a
g
e
,
 
$
c
o
n
c
a
t
 
=
 
f
a
l
s
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
[
]
 
=
 
a
r
r
a
y
(
'
c
e
l
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
m
a
k
e
C
e
l
l
(
$
i
m
a
g
e
,
 
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
$
t
e
x
t
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
,
 
$
s
u
b
m
i
t
T
a
s
k
)
,
 
'
c
o
n
c
a
t
'
 
=
>
 
$
c
o
n
c
a
t
)
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
s
 
a
 
c
e
l
l
 
w
i
t
h
 
a
 
s
t
a
n
d
a
r
d
 
t
o
o
l
b
a
r
 
i
t
e
m
.

 
 
 
 
 
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
o
l
b
a
r
I
t
e
m
(
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
$
t
e
x
t
 
=
 
'
'
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
'
,
 
$
c
o
n
c
a
t
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
t
e
x
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
=
 
$
t
h
i
s
-
>
s
t
a
n
d
a
r
d
A
c
t
i
v
i
t
y
I
m
a
g
e
s
[
 
$
t
a
r
g
e
t
T
a
s
k
 
]
[
 
'
l
a
b
e
l
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
'
.
$
t
h
i
s
-
>
i
m
a
g
e
S
i
z
e
.
'
/
'
.
$
t
h
i
s
-
>
s
t
a
n
d
a
r
d
A
c
t
i
v
i
t
y
I
m
a
g
e
s
[
 
$
t
a
r
g
e
t
T
a
s
k
 
]
[
 
'
i
m
a
g
e
'
 
]
.
'
.
'
.
$
t
h
i
s
-
>
i
m
a
g
e
E
x
t
e
n
s
i
o
n
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
[
]
 
=
 
a
r
r
a
y
(
'
c
e
l
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
m
a
k
e
C
e
l
l
(
$
i
m
a
g
e
,
 
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
$
t
e
x
t
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
,
 
$
s
u
b
m
i
t
T
a
s
k
)
,
 
'
c
o
n
c
a
t
'
 
=
>
 
$
c
o
n
c
a
t
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
S
t
a
r
t
s
 
t
h
e
 
t
a
b
l
e
 
a
n
d
 
i
n
s
e
r
t
s
 
c
s
s
 
t
o
 
t
h
e
 
r
e
n
d
e
r
e
d
 
p
a
g
e
 
i
f
 
i
t
 
h
a
s
n
'
t
 
b
e
e
n
 
d
o
n
e
 
b
e
f
o
r
e
.

 
 
 
 
 
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
t
a
r
t
T
a
b
l
e
(
)

 
 
 
 
{

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
E
n
d
s
 
t
h
e
 
t
o
o
l
b
a
r
 
t
a
b
l
e
.

 
 
 
 
 
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
 
e
n
d
T
a
b
l
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
n
e
w
_
a
r
r
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
f
i
r
s
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
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
i
t
e
m
s
 
a
s
 
$
i
t
e
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
i
t
e
m
[
'
c
e
l
l
'
]
,
 
'
p
r
i
m
a
r
y
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
r
s
t
[
]
 
=
 
$
i
t
e
m
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
a
r
r
[
]
 
=
 
$
i
t
e
m
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
f
i
r
s
t
)
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
 
=
 
a
r
r
a
y
_
m
e
r
g
e
(
$
f
i
r
s
t
,
 
$
n
e
w
_
a
r
r
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
 
=
 
$
n
e
w
_
a
r
r
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
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
i
t
e
m
s
 
a
s
 
$
i
t
e
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
t
e
m
[
'
c
o
n
c
a
t
'
]
 
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
$
i
t
e
m
[
'
c
e
l
l
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
'
;


 
 
 
 
 
 
 
 
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
i
t
e
m
s
 
a
s
 
$
i
t
e
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
t
e
m
[
'
c
o
n
c
a
t
'
]
 
=
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
$
i
t
e
m
[
'
c
e
l
l
'
]
.
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
o
u
t
p
u
t
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
T
h
e
 
v
a
r
i
o
u
s
 
t
o
o
l
b
a
r
 
i
t
e
m
 
t
y
p
e
 
m
e
t
h
o
d
s
 
r
e
f
e
r
 
t
o
 
t
h
i
s
 
t
o
 
a
c
t
u
a
l
l
y
 
f
i
n
i
s
h
 
t
h
e
 
c
o
n
s
t
r
u
c
t
i
o
n
 
o
f
 
t
h
e
 
c
e
l
l
.

 
 
 
 
 
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
 
m
a
k
e
C
e
l
l
(
$
i
m
a
g
e
,
 
$
t
a
r
g
e
t
T
a
s
k
,
 
$
l
i
n
k
,
 
$
t
e
x
t
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
u
r
l
e
n
c
o
d
e
(
$
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
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
'
+
'
,
 
'
%
2
0
'
,
 
$
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
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
'
%
2
F
'
,
 
'
/
'
,
 
$
i
m
a
g
e
)
;


 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
$
t
h
i
s
-
>
l
i
v
e
s
i
t
e
.
$
i
m
a
g
e
;

 
 
 
 
 
 
 
 
$
t
 
=
 
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
"
'
"
,
 
"
\
'
"
,
 
$
t
e
x
t
)
;

 
 
 
 
 
 
 
 
$
t
 
=
 
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
'
&
#
3
9
;
'
,
 
"
\
'
"
,
 
$
t
)
;

 
 
 
 
 
 
 
 
$
t
i
t
l
e
 
=
 
'
t
i
t
l
e
=
"
'
.
$
t
.
'
"
'
;


 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
c
l
a
s
s
 
i
s
 
a
 
m
o
d
i
f
i
c
a
t
i
o
n
 
o
f
 
a
n
 
o
l
d
e
r
 
c
l
a
s
s
.
 
W
e
'
r
e
 
n
o
t
 
g
o
i
n
g
 
t
o
 
r
e
w
r
i
t
e
 
e
v
e
r
y
 
s
c
r
i
p
t
 
t
h
a
t
 
c
a
l
l
s
 
t
h
e
 
b
u
t
t
o
n
s
,
 
t
h
e
r
e
'
r
e
 
t
o
o
 
m
a
n
y
,
 
i
n
s
t
e
a
d
 
w
e
'
l
l
 
m
o
d
i
f
y
 
t
h
i
s
 
c
l
a
s
s
 
t
o
 
l
o
o
k
 
a
t
 
w
h
a
t
 
i
s
 
p
a
s
s
e
d
.


 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
E
d
i
t
I
t
e
m
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
p
e
n
c
i
l
-
s
q
u
a
r
e
-
o
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
T
i
c
k
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
c
h
e
c
k
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
A
d
d
I
t
e
m
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
p
l
u
s
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
g
u
e
s
t
A
d
d
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
p
l
u
s
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
C
a
n
c
e
l
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
t
i
m
e
s
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
S
a
v
e
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
c
h
e
c
k
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
W
a
s
t
e
B
a
s
k
e
t
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
t
r
a
s
h
-
o
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
S
y
m
b
o
l
%
2
0
R
e
f
r
e
s
h
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
r
e
f
r
e
s
h
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
C
o
p
y
I
t
e
m
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
f
i
l
e
s
-
o
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
V
i
e
w
A
r
c
h
i
v
e
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
a
r
c
h
i
v
e
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
B
o
o
k
G
u
e
s
t
I
n
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
s
i
g
n
-
i
n
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
B
o
o
k
G
u
e
s
t
O
u
t
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
s
i
g
n
-
o
u
t
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
P
r
i
n
t
e
r
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
f
a
-
p
r
i
n
t
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
(
$
i
m
a
g
e
.
"
 
"
.
$
i
c
o
n
)
;


 
 
 
 
 
 
 
 
$
e
m
p
h
a
s
i
s
 
=
 
'
 
b
t
n
-
d
e
f
a
u
l
t
'
;

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
T
i
c
k
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
p
h
a
s
i
s
 
=
 
'
b
t
n
-
s
u
c
c
e
s
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
i
c
o
n
 
.
=
 
"
 
i
c
o
n
-
w
h
i
t
e
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
g
u
e
s
t
A
d
d
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
p
h
a
s
i
s
 
=
 
'
b
t
n
-
p
r
i
m
a
r
y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
i
c
o
n
 
.
=
 
"
 
i
c
o
n
-
w
h
i
t
e
 
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
A
d
d
I
t
e
m
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
p
h
a
s
i
s
 
=
 
'
b
t
n
-
p
r
i
m
a
r
y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
i
c
o
n
 
.
=
 
"
 
i
c
o
n
-
w
h
i
t
e
 
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
S
a
v
e
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
p
h
a
s
i
s
 
=
 
'
b
t
n
-
p
r
i
m
a
r
y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
i
c
o
n
 
.
=
 
"
 
i
c
o
n
-
w
h
i
t
e
 
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
W
a
s
t
e
B
a
s
k
e
t
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
p
h
a
s
i
s
 
=
 
'
b
t
n
-
d
a
n
g
e
r
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
i
c
o
n
 
.
=
 
"
 
i
c
o
n
-
w
h
i
t
e
 
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
E
d
i
t
I
t
e
m
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
p
h
a
s
i
s
 
=
 
'
b
t
n
-
i
n
f
o
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
i
c
o
n
 
.
=
 
"
 
i
c
o
n
-
w
h
i
t
e
 
"
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
i
m
a
g
e
,
 
'
B
o
o
k
G
u
e
s
t
O
u
t
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
p
h
a
s
i
s
 
=
 
'
b
t
n
-
s
u
c
c
e
s
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
i
c
o
n
 
.
=
 
"
 
i
c
o
n
-
w
h
i
t
e
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
s
u
b
m
i
t
O
n
C
l
i
c
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
m
i
t
 
=
 
'
<
a
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
m
d
 
'
.
$
e
m
p
h
a
s
i
s
.
'
"
 
h
r
e
f
=
"
j
a
v
a
s
c
r
i
p
t
:
j
o
m
r
e
s
_
s
u
b
m
i
t
b
u
t
t
o
n
(
\
'
'
.
$
s
u
b
m
i
t
T
a
s
k
.
'
\
'
)
;
"
>
<
i
 
c
l
a
s
s
=
"
f
a
 
'
.
$
i
c
o
n
.
'
"
>
<
/
i
>
 
'
.
$
t
e
x
t
.
'
<
/
a
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
s
u
b
m
i
t
 
=
 
'
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
l
i
n
k
.
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
m
d
 
'
.
$
e
m
p
h
a
s
i
s
.
'
"
>
<
i
 
c
l
a
s
s
=
"
f
a
 
'
.
$
i
c
o
n
.
'
"
>
<
/
i
>
 
'
.
$
t
e
x
t
.
'
<
/
a
>
 
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
$
s
u
b
m
i
t
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
o
u
t
p
u
t
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
R
e
t
u
r
n
s
 
a
n
 
a
r
r
a
y
 
o
f
 
a
l
l
 
t
h
e
 
s
t
a
n
d
a
r
d
 
i
m
a
g
e
s
,
 
w
i
t
h
 
d
e
f
a
u
l
t
 
t
e
x
t
 
t
h
a
t
 
i
s
 
u
s
e
d
 
f
o
r
 
t
h
e
 
b
u
t
t
o
n
 
h
i
n
t
 
i
f
 
n
o
t
h
i
n
g
 
w
a
s
 
s
u
p
p
l
i
e
d
.

 
 
 
 
 
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
S
t
a
n
d
a
r
d
A
c
t
i
v
i
t
y
I
m
a
g
e
s
A
r
r
a
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
n
e
w
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
A
d
d
I
t
e
m
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
N
E
W
T
A
R
I
F
F
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
N
E
W
T
A
R
I
F
F
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
e
d
i
t
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
E
d
i
t
I
t
e
m
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
L
I
N
K
T
E
X
T
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
L
I
N
K
T
E
X
T
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
c
a
n
c
e
l
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
C
a
n
c
e
l
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
A
_
C
A
N
C
E
L
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
A
N
C
E
L
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
h
e
l
p
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
S
y
m
b
o
l
 
H
e
l
p
'
,
 
'
l
a
b
e
l
'
 
=
>
 
'
H
e
l
p
'
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
a
p
p
l
y
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
S
y
m
b
o
l
 
R
e
f
r
e
s
h
'
,
 
'
l
a
b
e
l
'
 
=
>
 
'
R
e
f
r
e
s
h
'
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
i
n
f
o
r
m
a
t
i
o
n
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
S
y
m
b
o
l
 
I
n
f
o
r
m
a
t
i
o
n
'
,
 
'
l
a
b
e
l
'
 
=
>
 
'
I
n
f
o
r
m
a
t
i
o
n
'
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
c
o
p
y
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
C
o
p
y
I
t
e
m
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
L
I
N
K
T
E
X
T
C
L
O
N
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
L
I
N
K
T
E
X
T
C
L
O
N
E
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
s
a
v
e
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
S
a
v
e
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
S
A
V
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
S
A
V
E
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
d
e
l
e
t
e
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
W
a
s
t
e
B
a
s
k
e
t
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
p
u
b
l
i
s
h
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
T
i
c
k
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
U
N
P
U
B
L
I
S
H
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
U
N
P
U
B
L
I
S
H
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
u
n
p
u
b
l
i
s
h
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
C
a
n
c
e
l
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
P
U
B
L
I
S
H
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
U
B
L
I
S
H
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
a
r
c
h
i
v
e
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
V
i
e
w
A
r
c
h
i
v
e
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
M
R
_
A
U
D
I
T
_
A
R
C
H
I
V
E
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
A
R
C
H
I
V
E
'
,
 
f
a
l
s
e
)
)
;


 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
e
d
i
t
_
d
e
p
o
s
i
t
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
e
n
t
e
r
D
e
p
o
s
i
t
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
_
U
P
D
A
T
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
P
A
Y
M
_
D
E
P
O
S
I
T
_
P
A
I
D
_
U
P
D
A
T
E
'
,
 
$
e
d
i
t
a
b
l
e
 
=
 
f
a
l
s
e
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
e
d
i
t
_
b
o
o
k
i
n
g
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
C
o
n
t
a
c
t
C
a
r
d
E
d
i
t
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
L
I
N
K
T
E
X
T
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
L
I
N
K
T
E
X
T
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
c
a
n
c
e
l
_
b
o
o
k
i
n
g
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
H
o
t
e
l
R
e
s
e
r
v
a
t
i
o
n
S
t
o
p
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
C
A
N
C
E
L
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
C
A
N
C
E
L
B
O
O
K
I
N
G
'
,
 
$
e
d
i
t
a
b
l
e
 
=
 
f
a
l
s
e
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
a
d
d
s
e
r
v
i
c
e
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
a
d
d
S
e
r
v
i
c
e
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
D
D
S
E
R
V
I
C
E
_
T
I
T
L
E
'
,
 
$
e
d
i
t
a
b
l
e
 
=
 
f
a
l
s
e
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
p
r
i
n
t
e
r
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
P
r
i
n
t
e
r
'
,
 
'
l
a
b
e
l
'
 
=
>
 
'
P
r
i
n
t
'
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
e
m
a
i
l
s
e
n
d
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
E
m
a
i
l
S
e
n
d
'
,
 
'
l
a
b
e
l
'
 
=
>
 
'
E
m
a
i
l
'
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
s
t
a
t
s
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
C
h
a
r
t
B
a
r
T
r
e
n
d
'
,
 
'
l
a
b
e
l
'
 
=
>
 
'
S
t
a
t
s
'
)
;


 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
n
o
t
e
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
p
o
s
t
n
o
t
e
'
,
 
'
l
a
b
e
l
'
 
=
>
 
'
N
o
t
e
'
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
d
e
l
e
t
e
p
r
o
p
e
r
t
y
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
W
a
s
t
e
B
a
s
k
e
t
'
,
 
'
l
a
b
e
l
'
 
=
>
 
'
D
e
l
e
t
e
'
)
;


 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
b
o
o
k
G
u
e
s
t
I
n
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
B
o
o
k
G
u
e
s
t
I
n
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
I
N
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
b
o
o
k
G
u
e
s
t
O
u
t
'
 
]
 
=
 
a
r
r
a
y
(
'
i
m
a
g
e
'
 
=
>
 
'
B
o
o
k
G
u
e
s
t
O
u
t
'
,
 
'
l
a
b
e
l
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
a
r
r
a
y
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
R
e
t
u
r
n
s
 
a
n
 
a
r
r
a
y
 
o
f
 
a
l
l
 
t
h
e
 
m
e
n
u
b
a
r
 
i
m
a
g
e
s
.

 
 
 
 
 
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
e
n
u
b
a
r
I
m
a
g
e
s
A
r
r
a
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
b
o
o
k
a
r
o
o
m
'
 
]
 
=
 
'
N
e
w
B
o
o
k
i
n
g
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
b
l
a
c
k
b
o
o
k
i
n
g
s
'
 
]
 
=
 
'
E
d
i
t
B
l
a
c
k
B
o
o
k
i
n
g
s
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
l
i
s
t
b
o
o
k
i
n
g
s
'
 
]
 
=
 
'
L
i
s
t
B
o
o
k
i
n
g
s
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
l
i
s
t
n
e
w
b
o
o
k
i
n
g
s
'
 
]
 
=
 
'
L
i
s
t
N
e
w
B
o
o
k
i
n
g
s
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
g
u
e
s
t
t
y
p
e
s
'
 
]
 
=
 
'
E
d
i
t
G
u
e
s
t
T
y
p
e
s
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
d
a
s
h
b
o
a
r
d
'
 
]
 
=
 
'
H
o
m
e
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
a
u
d
i
t
t
r
a
i
l
'
 
]
 
=
 
'
a
u
d
i
t
L
o
g
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
e
x
t
r
a
s
'
 
]
 
=
 
'
E
d
i
t
O
p
t
i
o
n
s
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
s
l
i
d
w
s
h
o
w
i
m
a
g
e
s
'
 
]
 
=
 
'
S
l
i
d
e
S
h
o
w
I
m
a
g
e
s
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
e
d
i
t
l
a
n
g
u
a
g
e
'
 
]
 
=
 
'
E
d
i
t
T
e
x
t
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
b
o
o
k
g
u
e
s
t
i
n
'
 
]
 
=
 
'
B
o
o
k
G
u
e
s
t
I
n
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
b
o
o
k
g
u
e
s
t
o
u
t
'
 
]
 
=
 
'
B
o
o
k
G
u
e
s
t
O
u
t
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
g
u
e
s
t
a
d
m
i
n
'
 
]
 
=
 
'
G
u
e
s
t
A
d
m
i
n
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
p
r
o
p
e
r
t
y
a
d
m
i
n
'
 
]
 
=
 
'
P
r
o
p
e
r
t
y
A
d
m
i
n
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
p
r
e
v
i
e
w
'
 
]
 
=
 
'
P
r
e
v
i
e
w
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
e
m
a
i
l
s
e
n
d
'
 
]
 
=
 
'
E
m
a
i
l
S
e
n
d
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
s
t
a
t
s
'
 
]
 
=
 
'
C
h
a
r
t
B
a
r
T
r
e
n
d
'
;


 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
c
o
n
f
i
g
u
r
a
t
i
o
n
'
 
]
 
=
 
'
E
d
i
t
C
o
n
f
i
g
u
r
a
t
i
o
n
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
n
e
w
p
r
o
p
e
r
t
y
'
 
]
 
=
 
'
A
d
d
P
r
o
p
e
r
t
y
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
p
u
b
l
i
s
h
'
 
]
 
=
 
'
P
u
b
l
i
s
h
P
r
o
p
e
r
t
y
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
u
n
p
u
b
l
i
s
h
'
 
]
 
=
 
'
U
n
p
u
b
l
i
s
h
P
r
o
p
e
r
t
y
'
;

 
 
 
 
 
 
 
 
$
a
r
r
a
y
[
 
'
d
e
l
e
t
e
p
r
o
p
e
r
t
y
'
 
]
 
=
 
'
W
a
s
t
e
B
a
s
k
e
t
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
a
r
r
a
y
;

 
 
 
 
}

}

