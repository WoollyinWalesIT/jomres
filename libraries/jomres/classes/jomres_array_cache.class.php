
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
a
r
r
a
y
_
c
a
c
h
e

{

 
 
 
 
/
*
*

 
 
 
 
 
*
 
T
h
e
 
p
a
t
h
 
t
o
 
t
h
e
 
c
a
c
h
e
 
f
i
l
e
 
f
o
l
d
e
r
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
v
a
r
 
s
t
r
i
n
g

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
$
_
c
a
c
h
e
p
a
t
h
 
=
 
'
c
a
c
h
e
/
'
;


 
 
 
 
/
*
*

 
 
 
 
 
*
 
T
h
e
 
n
a
m
e
 
o
f
 
t
h
e
 
d
e
f
a
u
l
t
 
c
a
c
h
e
 
f
i
l
e
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
v
a
r
 
s
t
r
i
n
g

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
$
_
c
a
c
h
e
n
a
m
e
 
=
 
'
j
o
m
r
e
s
'
;


 
 
 
 
/
*
*

 
 
 
 
 
*
 
T
h
e
 
c
a
c
h
e
 
f
i
l
e
 
e
x
t
e
n
s
i
o
n
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
v
a
r
 
s
t
r
i
n
g

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
$
_
e
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
.
c
a
c
h
e
'
;


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
a
c
h
i
n
g
 
e
n
a
b
l
e
d
/
d
i
s
a
b
l
e
d
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
v
a
r
 
b
o
o
l

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
$
_
u
s
e
C
a
c
h
i
n
g
 
=
 
f
a
l
s
e
;


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
a
c
h
e
d
 
d
a
t
a
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
v
a
r
 
a
r
r
a
y

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
$
_
c
a
c
h
e
d
D
a
t
a
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
/
*
*

 
 
 
 
 
*
 
F
i
l
e
 
l
o
a
d
e
d
 
f
l
a
g
,
 
t
o
 
p
r
e
v
e
n
t
 
r
e
a
d
i
n
g
 
t
h
e
 
f
i
l
e
 
m
o
r
e
 
t
h
a
n
 
o
n
c
e
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
v
a
r
 
b
o
o
l

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
$
_
f
i
l
e
L
o
a
d
e
d
 
=
 
f
a
l
s
e
;


 
 
 
 
/
*
*

 
 
 
 
 
*
 
D
e
f
a
u
l
t
 
c
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
|
a
r
r
a
y
 
[
o
p
t
i
o
n
a
l
]
 
$
c
o
n
f
i
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
c
o
n
f
i
g
 
=
 
n
u
l
l
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
A
r
r
a
y
C
a
c
h
i
n
g
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
A
r
r
a
y
C
a
c
h
i
n
g
'
 
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
_
u
s
e
C
a
c
h
i
n
g
 
=
 
(
b
o
o
l
)
 
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
A
r
r
a
y
C
a
c
h
i
n
g
'
 
]
;


 
 
 
 
 
 
 
 
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
_
u
s
e
C
a
c
h
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
t
r
u
e
 
=
=
=
 
i
s
s
e
t
(
$
c
o
n
f
i
g
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
s
t
r
i
n
g
(
$
c
o
n
f
i
g
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
s
e
t
C
a
c
h
e
(
$
c
o
n
f
i
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
i
s
_
a
r
r
a
y
(
$
c
o
n
f
i
g
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
s
e
t
C
a
c
h
e
(
$
c
o
n
f
i
g
[
'
n
a
m
e
'
]
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
e
t
C
a
c
h
e
P
a
t
h
(
$
c
o
n
f
i
g
[
'
p
a
t
h
'
]
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
e
t
E
x
t
e
n
s
i
o
n
(
$
c
o
n
f
i
g
[
'
e
x
t
e
n
s
i
o
n
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
s
e
t
C
a
c
h
e
P
a
t
h
(
J
O
M
R
E
S
_
C
A
C
H
E
_
A
B
S
P
A
T
H
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
l
a
n
g
 
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
_
c
a
c
h
e
_
l
a
n
g
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
_
l
o
a
d
C
a
c
h
e
(
)
;

 
 
 
 
 
 
 
 
/
/
$
t
h
i
s
-
>
e
r
a
s
e
E
x
p
i
r
e
d
(
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
h
e
c
k
 
w
h
e
t
h
e
r
 
d
a
t
a
 
a
c
c
o
c
i
a
t
e
d
 
w
i
t
h
 
a
 
k
e
y
.

 
 
 
 
 
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
k
e
y

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
b
o
o
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
 
i
s
C
a
c
h
e
d
(
$
k
e
y
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
_
u
s
e
C
a
c
h
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
i
s
s
e
t
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
[
$
k
e
y
]
[
'
d
a
t
a
'
]
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
S
t
o
r
e
 
d
a
t
a
 
i
n
 
t
h
e
 
c
a
c
h
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
 
s
t
r
i
n
g
 
 
 
 
 
 
 
 
 
$
k
e
y

 
 
 
 
 
*
 
@
p
a
r
a
m
 
m
i
x
e
d
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a

 
 
 
 
 
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
 
[
o
p
t
i
o
n
a
l
]
 
$
e
x
p
i
r
a
t
i
o
n

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
o
b
j
e
c
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
 
s
t
o
r
e
(
$
k
e
y
,
 
$
d
a
t
a
,
 
$
e
x
p
i
r
a
t
i
o
n
 
=
 
0
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
_
u
s
e
C
a
c
h
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
s
t
o
r
e
D
a
t
a
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
'
t
i
m
e
'
 
=
>
 
t
i
m
e
(
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
e
x
p
i
r
e
'
 
=
>
 
$
e
x
p
i
r
a
t
i
o
n
,

 
 
 
 
 
 
 
 
 
 
 
 
'
d
a
t
a
'
 
=
>
 
$
d
a
t
a
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
i
f
 
(
t
r
u
e
 
=
=
=
 
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
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
_
c
a
c
h
e
d
D
a
t
a
[
$
k
e
y
]
 
=
 
$
s
t
o
r
e
D
a
t
a
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
_
c
a
c
h
e
d
D
a
t
a
 
=
 
a
r
r
a
y
(
$
k
e
y
 
=
>
 
$
s
t
o
r
e
D
a
t
a
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
a
c
h
e
D
a
t
a
 
=
 
j
s
o
n
_
e
n
c
o
d
e
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
)
;

 
 
 
 
 
 
 
 
@
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
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
C
a
c
h
e
D
i
r
(
)
,
 
$
c
a
c
h
e
D
a
t
a
)
;

 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
c
a
c
h
e
D
a
t
a
)
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


 
 
 
 
/
*
*

 
 
 
 
 
*
 
R
e
t
r
i
e
v
e
 
c
a
c
h
e
d
 
d
a
t
a
 
b
y
 
i
t
s
 
k
e
y
.

 
 
 
 
 
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
k
e
y

 
 
 
 
 
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
 
[
o
p
t
i
o
n
a
l
]
 
$
t
i
m
e
s
t
a
m
p

 
 
 
 
 
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
 
r
e
t
r
i
e
v
e
(
$
k
e
y
,
 
$
t
i
m
e
s
t
a
m
p
 
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
!
$
t
h
i
s
-
>
_
u
s
e
C
a
c
h
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
(
f
a
l
s
e
 
=
=
=
 
$
t
i
m
e
s
t
a
m
p
)
 
?
 
$
t
y
p
e
 
=
 
'
d
a
t
a
'
 
:
 
$
t
y
p
e
 
=
 
'
t
i
m
e
'
;

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
[
$
k
e
y
]
[
$
t
y
p
e
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
_
c
a
c
h
e
d
D
a
t
a
[
$
k
e
y
]
[
$
t
y
p
e
]
 
=
 
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
_
c
a
c
h
e
d
D
a
t
a
[
$
k
e
y
]
[
$
t
y
p
e
]
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
R
e
t
r
i
e
v
e
 
a
l
l
 
c
a
c
h
e
d
 
d
a
t
a
.

 
 
 
 
 
*

 
 
 
 
 
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
 
[
o
p
t
i
o
n
a
l
]
 
$
m
e
t
a

 
 
 
 
 
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
 
r
e
t
r
i
e
v
e
A
l
l
(
$
m
e
t
a
 
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
!
$
t
h
i
s
-
>
_
u
s
e
C
a
c
h
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
m
e
t
a
 
=
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
r
e
s
u
l
t
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
_
c
a
c
h
e
d
D
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
a
c
h
e
d
D
a
t
a
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
$
k
]
 
=
 
$
v
[
'
d
a
t
a
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
s
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
_
c
a
c
h
e
d
D
a
t
a
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
E
r
a
s
e
 
c
a
c
h
e
d
 
e
n
t
r
y
 
b
y
 
i
t
s
 
k
e
y
.

 
 
 
 
 
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
k
e
y

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
o
b
j
e
c
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
 
e
r
a
s
e
(
$
k
e
y
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
_
u
s
e
C
a
c
h
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
t
r
u
e
 
=
=
=
 
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
t
r
u
e
 
=
=
=
 
i
s
s
e
t
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
[
$
k
e
y
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
[
$
k
e
y
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
c
h
e
D
a
t
a
 
=
 
j
s
o
n
_
e
n
c
o
d
e
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
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
C
a
c
h
e
D
i
r
(
)
,
 
$
c
a
c
h
e
D
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
E
r
a
s
e
 
a
l
l
 
e
x
p
i
r
e
d
 
e
n
t
r
i
e
s
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
 
e
r
a
s
e
E
x
p
i
r
e
d
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
_
u
s
e
C
a
c
h
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
t
r
u
e
 
=
=
=
 
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
e
r
 
=
 
0
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
_
c
a
c
h
e
d
D
a
t
a
 
a
s
 
$
k
e
y
 
=
>
 
$
e
n
t
r
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
t
r
u
e
 
=
=
=
 
$
t
h
i
s
-
>
_
c
h
e
c
k
E
x
p
i
r
e
d
(
$
e
n
t
r
y
[
'
t
i
m
e
'
]
,
 
$
e
n
t
r
y
[
'
e
x
p
i
r
e
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
[
$
k
e
y
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
e
r
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
c
h
e
D
a
t
a
 
=
 
j
s
o
n
_
e
n
c
o
d
e
(
$
c
a
c
h
e
D
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
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
C
a
c
h
e
D
i
r
(
)
,
 
$
c
a
c
h
e
D
a
t
a
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
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
E
r
a
s
e
 
a
l
l
 
c
a
c
h
e
d
 
e
n
t
r
i
e
s
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
 
o
b
j
e
c
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
 
e
r
a
s
e
A
l
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
_
u
s
e
C
a
c
h
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
c
h
e
D
i
r
 
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
a
c
h
e
D
i
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
t
r
u
e
 
=
=
=
 
f
i
l
e
_
e
x
i
s
t
s
(
$
c
a
c
h
e
D
i
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
c
h
e
F
i
l
e
 
=
 
f
o
p
e
n
(
$
c
a
c
h
e
D
i
r
,
 
'
w
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
c
l
o
s
e
(
$
c
a
c
h
e
F
i
l
e
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
_
c
a
c
h
e
d
D
a
t
a
 
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

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
g
l
o
b
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
C
a
c
h
e
P
a
t
h
(
)
.
'
*
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
E
x
t
e
n
s
i
o
n
(
)
)
 
a
s
 
$
f
i
l
e
n
a
m
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
n
a
m
e
 
!
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
a
c
h
e
D
i
r
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
c
h
e
F
i
l
e
 
=
 
f
o
p
e
n
(
$
f
i
l
e
n
a
m
e
,
 
'
w
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
c
l
o
s
e
(
$
c
a
c
h
e
F
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
L
o
a
d
 
a
p
p
o
i
n
t
e
d
 
c
a
c
h
e
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
 
m
i
x
e
d

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
l
o
a
d
C
a
c
h
e
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
_
f
i
l
e
L
o
a
d
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
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
C
a
c
h
e
D
i
r
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
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
C
a
c
h
e
D
i
r
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
_
c
a
c
h
e
d
D
a
t
a
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
$
f
i
l
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
_
f
i
l
e
L
o
a
d
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
f
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
G
e
t
 
t
h
e
 
c
a
c
h
e
 
d
i
r
e
c
t
o
r
y
 
p
a
t
h
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
 
g
e
t
C
a
c
h
e
D
i
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
t
r
u
e
 
=
=
=
 
$
t
h
i
s
-
>
_
c
h
e
c
k
C
a
c
h
e
D
i
r
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
n
a
m
e
 
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
a
c
h
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
n
a
m
e
 
=
 
p
r
e
g
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
/
[
^
0
-
9
a
-
z
\
.
\
_
\
-
]
/
i
'
,
 
'
'
,
 
s
t
r
t
o
l
o
w
e
r
(
$
f
i
l
e
n
a
m
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
a
c
h
e
P
a
t
h
(
)
.
$
t
h
i
s
-
>
_
g
e
t
H
a
s
h
(
$
f
i
l
e
n
a
m
e
)
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
E
x
t
e
n
s
i
o
n
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
G
e
t
 
t
h
e
 
f
i
l
e
n
a
m
e
 
h
a
s
h
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
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
g
e
t
H
a
s
h
(
$
f
i
l
e
n
a
m
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
h
a
1
(
$
f
i
l
e
n
a
m
e
)
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
h
e
c
k
 
w
h
e
t
h
e
r
 
a
 
t
i
m
e
s
t
a
m
p
 
i
s
 
s
t
i
l
l
 
i
n
 
t
h
e
 
d
u
r
a
t
i
o
n
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
t
i
m
e
s
t
a
m
p

 
 
 
 
 
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
e
x
p
i
r
a
t
i
o
n

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
b
o
o
l

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
c
h
e
c
k
E
x
p
i
r
e
d
(
$
t
i
m
e
s
t
a
m
p
,
 
$
e
x
p
i
r
a
t
i
o
n
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
i
f
 
(
$
e
x
p
i
r
a
t
i
o
n
 
!
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
i
m
e
D
i
f
f
 
=
 
t
i
m
e
(
)
 
-
 
$
t
i
m
e
s
t
a
m
p
;

 
 
 
 
 
 
 
 
 
 
 
 
(
$
t
i
m
e
D
i
f
f
 
>
 
$
e
x
p
i
r
a
t
i
o
n
)
 
?
 
$
r
e
s
u
l
t
 
=
 
t
r
u
e
 
:
 
$
r
e
s
u
l
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
h
e
c
k
 
i
f
 
a
 
w
r
i
t
a
b
l
e
 
c
a
c
h
e
 
d
i
r
e
c
t
o
r
y
 
e
x
i
s
t
s
 
a
n
d
 
i
f
 
n
o
t
 
c
r
e
a
t
e
 
a
 
n
e
w
 
o
n
e
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
 
b
o
o
l

 
 
 
 
 
*
/

 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
c
h
e
c
k
C
a
c
h
e
D
i
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
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
C
a
c
h
e
P
a
t
h
(
)
)
 
&
&
 
!
m
k
d
i
r
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
C
a
c
h
e
P
a
t
h
(
)
,
 
0
7
7
5
,
 
t
r
u
e
)
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
U
n
a
b
l
e
 
t
o
 
c
r
e
a
t
e
 
c
a
c
h
e
 
d
i
r
e
c
t
o
r
y
 
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
C
a
c
h
e
P
a
t
h
(
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
!
i
s
_
r
e
a
d
a
b
l
e
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
C
a
c
h
e
P
a
t
h
(
)
)
 
|
|
 
!
i
s
_
w
r
i
t
a
b
l
e
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
C
a
c
h
e
P
a
t
h
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
c
h
m
o
d
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
C
a
c
h
e
P
a
t
h
(
)
,
 
0
7
7
5
)
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
a
c
h
e
P
a
t
h
(
)
.
'
 
m
u
s
t
 
b
e
 
r
e
a
d
a
b
l
e
 
a
n
d
 
w
r
i
t
e
a
b
l
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
G
e
t
 
t
h
e
 
f
i
l
e
n
a
m
e
 
h
a
s
h
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
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
r
e
f
r
e
s
h
C
a
c
h
e
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
_
c
a
c
h
e
d
D
a
t
a
 
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
t
h
i
s
-
>
_
l
o
a
d
C
a
c
h
e
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
t
h
i
s
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
a
c
h
e
 
p
a
t
h
 
S
e
t
t
e
r
.

 
 
 
 
 
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
p
a
t
h

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
o
b
j
e
c
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
 
s
e
t
C
a
c
h
e
P
a
t
h
(
$
p
a
t
h
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
_
c
a
c
h
e
p
a
t
h
 
=
 
$
p
a
t
h
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


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
a
c
h
e
 
p
a
t
h
 
G
e
t
t
e
r
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
 
g
e
t
C
a
c
h
e
P
a
t
h
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
_
c
a
c
h
e
p
a
t
h
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
a
c
h
e
 
n
a
m
e
 
S
e
t
t
e
r
.

 
 
 
 
 
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
n
a
m
e

 
 
 
 
 
*

 
 
 
 
 
*
 
@
r
e
t
u
r
n
 
o
b
j
e
c
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
 
s
e
t
C
a
c
h
e
(
$
n
a
m
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
_
c
a
c
h
e
n
a
m
e
 
=
 
$
n
a
m
e
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


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
a
c
h
e
 
n
a
m
e
 
G
e
t
t
e
r
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
C
a
c
h
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
_
c
a
c
h
e
n
a
m
e
.
$
t
h
i
s
-
>
l
a
n
g
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
a
c
h
e
 
l
a
n
g
u
a
g
e
 
G
e
t
t
e
r
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
 
g
e
t
_
c
a
c
h
e
_
l
a
n
g
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
c
a
c
h
e
_
l
a
n
g
 
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
a
n
g
'
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
c
a
c
h
e
_
l
a
n
g
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
a
c
h
e
 
f
i
l
e
 
e
x
t
e
n
s
i
o
n
 
S
e
t
t
e
r
.

 
 
 
 
 
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
e
x
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
 
o
b
j
e
c
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
 
s
e
t
E
x
t
e
n
s
i
o
n
(
$
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
_
e
x
t
e
n
s
i
o
n
 
=
 
$
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


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
a
c
h
e
 
f
i
l
e
 
e
x
t
e
n
s
i
o
n
 
G
e
t
t
e
r
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
 
g
e
t
E
x
t
e
n
s
i
o
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
_
e
x
t
e
n
s
i
o
n
;

 
 
 
 
}

}

