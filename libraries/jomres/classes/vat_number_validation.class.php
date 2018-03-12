
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
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n

{

 
 
 
 
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
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
a
g
e
s
[
 
'
r
e
s
u
l
t
'
 
]
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
a
g
e
s
[
 
'
m
e
s
s
a
g
e
'
 
]
 
=
 
'
V
I
E
S
 
n
o
t
 
y
e
t
 
c
a
l
l
e
d
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
 
=
 
'
'
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
_
s
u
b
j
e
c
t
(
$
t
y
p
e
 
=
 
'
'
,
 
$
a
r
g
u
m
e
n
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
g
u
e
s
t
_
r
e
g
i
s
t
e
r
e
d
_
b
y
g
u
e
s
t
_
i
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
a
r
g
u
m
e
n
t
s
[
'
g
u
e
s
t
_
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
a
r
g
u
m
e
n
t
s
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
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
v
a
t
_
n
u
m
b
e
r
`
,
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
,
`
c
o
u
n
t
r
y
`
,
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
W
H
E
R
E
 
g
u
e
s
t
s
_
u
i
d
 
=
 
'
.
(
i
n
t
)
 
$
i
d
.
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
'
 
L
I
M
I
T
 
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
u
l
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
v
a
t
_
n
u
m
b
e
r
 
=
 
$
r
e
s
u
l
t
[
 
'
v
a
t
_
n
u
m
b
e
r
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
$
r
e
s
u
l
t
[
 
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
 
=
 
$
r
e
s
u
l
t
[
 
'
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
 
=
 
$
r
e
s
u
l
t
[
 
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
'
 
]
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
v
a
t
_
n
u
m
b
e
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
f
a
l
s
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
o
u
n
t
r
y
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
b
u
y
e
r
_
r
e
g
i
s
t
e
r
e
d
_
b
y
p
r
o
f
i
l
e
_
i
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
a
r
g
u
m
e
n
t
s
[
'
p
r
o
f
i
l
e
_
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
v
a
t
_
n
u
m
b
e
r
`
,
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
,
`
c
o
u
n
t
r
y
`
,
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
W
H
E
R
E
 
c
m
s
_
u
s
e
r
_
i
d
 
=
 
'
.
(
i
n
t
)
 
$
i
d
.
'
 
L
I
M
I
T
 
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
u
l
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
v
a
t
_
n
u
m
b
e
r
 
=
 
$
r
e
s
u
l
t
[
 
'
v
a
t
_
n
u
m
b
e
r
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
$
r
e
s
u
l
t
[
 
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
 
=
 
$
r
e
s
u
l
t
[
 
'
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
 
=
 
$
r
e
s
u
l
t
[
 
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
'
 
]
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
v
a
t
_
n
u
m
b
e
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
f
a
l
s
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
o
u
n
t
r
y
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
r
o
p
e
r
t
y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
a
r
g
u
m
e
n
t
s
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
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
 
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
$
p
r
o
p
e
r
t
y
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
 
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
p
r
o
p
e
r
t
y
_
v
a
t
_
n
u
m
b
e
r
'
 
]
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
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
 
]
)
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
[
 
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
 
]
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
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
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
_
c
o
d
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
i
t
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
 
=
 
t
r
i
m
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
b
u
s
i
n
e
s
s
_
v
a
t
_
n
u
m
b
e
r
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
c
o
u
n
t
r
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
_
a
d
j
u
s
t
e
d
_
c
o
u
n
t
r
y
_
c
o
d
e
(
s
u
b
s
t
r
(
t
r
i
m
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
b
u
s
i
n
e
s
s
_
v
a
t
_
n
u
m
b
e
r
'
]
)
,
 
0
,
 
2
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
 
=
 
$
a
r
g
u
m
e
n
t
s
[
'
v
a
t
_
n
u
m
b
e
r
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
u
n
t
r
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
_
a
d
j
u
s
t
e
d
_
c
o
u
n
t
r
y
_
c
o
d
e
(
s
u
b
s
t
r
(
$
a
r
g
u
m
e
n
t
s
[
'
v
a
t
_
n
u
m
b
e
r
'
]
,
 
0
,
 
2
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
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
a
v
e
_
s
u
b
j
e
c
t
(
$
t
y
p
e
 
=
 
'
'
,
 
$
a
r
g
u
m
e
n
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
s
 
=
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
a
g
e
s
 
[
 
'
m
e
s
s
a
g
e
'
 
]
,
 
E
N
T
_
Q
U
O
T
E
S
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
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
a
g
e
s
[
 
'
r
e
s
u
l
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
v
a
l
i
d
a
t
e
d
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
a
t
e
d
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
g
u
e
s
t
_
r
e
g
i
s
t
e
r
e
d
_
b
y
g
u
e
s
t
_
i
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
a
r
g
u
m
e
n
t
s
[
'
g
u
e
s
t
_
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
a
r
g
u
m
e
n
t
s
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
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
S
E
T
 
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
=
'
"
.
$
v
a
l
i
d
a
t
e
d
.
"
'
,
`
v
a
t
_
n
u
m
b
e
r
`
=
'
"
.
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
a
g
e
s
[
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
]
.
"
'
,
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
=
'
"
.
$
m
e
s
s
a
g
e
s
.
"
'
 
W
H
E
R
E
 
g
u
e
s
t
s
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
i
d
.
"
'
 
A
N
D
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
=
 
"
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
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
U
P
D
A
T
E
_
G
U
E
S
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
M
R
_
A
U
D
I
T
_
U
P
D
A
T
E
_
G
U
E
S
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
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
 
u
p
d
a
t
e
 
g
u
e
s
t
 
d
e
t
a
i
l
s
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
g
u
e
s
t
_
r
e
g
i
s
t
e
r
e
d
_
b
y
p
r
o
f
i
l
e
_
i
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
a
r
g
u
m
e
n
t
s
[
'
p
r
o
f
i
l
e
_
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
S
E
T
 
`
v
a
t
_
n
u
m
b
e
r
`
=
'
"
.
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
a
g
e
s
[
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
]
.
"
'
,
 
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
=
'
"
.
$
v
a
l
i
d
a
t
e
d
.
"
'
,
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
=
'
"
.
$
m
e
s
s
a
g
e
s
.
"
'
 
W
H
E
R
E
 
`
m
o
s
_
u
s
e
r
i
d
`
=
"
.
(
i
n
t
)
 
$
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 
S
E
T
 
`
v
a
t
_
n
u
m
b
e
r
`
=
'
"
.
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
a
g
e
s
[
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
]
.
"
'
,
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
`
=
'
"
.
$
v
a
l
i
d
a
t
e
d
.
"
'
,
`
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
`
=
'
"
.
$
m
e
s
s
a
g
e
s
.
"
'
 
W
H
E
R
E
 
c
m
s
_
u
s
e
r
_
i
d
 
=
 
"
.
(
i
n
t
)
 
$
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
r
o
p
e
r
t
y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
a
r
g
u
m
e
n
t
s
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
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
u
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
'
 
a
n
d
 
a
k
e
y
 
=
 
'
p
r
o
p
e
r
t
y
_
v
a
t
_
n
u
m
b
e
r
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 
(
p
r
o
p
e
r
t
y
_
u
i
d
,
a
k
e
y
,
v
a
l
u
e
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
'
,
'
p
r
o
p
e
r
t
y
_
v
a
t
_
n
u
m
b
e
r
'
,
'
"
.
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
a
g
e
s
[
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
]
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 
S
E
T
 
`
v
a
l
u
e
`
=
'
"
.
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
a
g
e
s
[
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
]
.
"
'
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
'
 
a
n
d
 
a
k
e
y
 
=
 
'
p
r
o
p
e
r
t
y
_
v
a
t
_
n
u
m
b
e
r
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
u
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
'
 
a
n
d
 
a
k
e
y
 
=
 
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 
(
p
r
o
p
e
r
t
y
_
u
i
d
,
a
k
e
y
,
v
a
l
u
e
)
 
V
A
L
U
E
S
 
(
'
"
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
'
,
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
,
'
"
.
$
v
a
l
i
d
a
t
e
d
.
"
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
_
s
e
t
t
i
n
g
s
 
S
E
T
 
`
v
a
l
u
e
`
=
'
"
.
$
v
a
l
i
d
a
t
e
d
.
"
'
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
"
'
 
a
n
d
 
a
k
e
y
 
=
 
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
i
t
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
W
e
 
d
o
n
'
t
 
(
c
u
r
r
e
n
t
l
y
)
 
v
a
l
i
d
a
t
e
 
S
i
t
e
 
V
A
T
 
d
e
t
a
i
l
s
,
 
s
o
 
w
e
'
l
l
 
n
o
t
 
o
f
f
e
r
 
a
 
"
s
a
v
e
"
 
o
p
t
i
o
n
 
f
o
r
 
s
i
t
e
 
v
a
t
 
s
e
t
t
i
n
g
s
,
 
a
s
 
t
h
i
s
 
i
s
 
a
l
r
e
a
d
y
 
c
o
v
e
r
e
d
 
b
y
 
S
i
t
e
 
C
o
n
f
i
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;


 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
u
n
t
r
y
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
v
i
e
s
_
c
h
e
c
k
(
$
v
a
t
_
n
u
m
b
e
r
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
t
_
n
u
m
b
e
r
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
t
_
n
u
m
b
e
r
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
v
a
t
_
n
u
m
b
e
r
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
t
N
u
m
b
e
r
 
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
a
r
r
a
y
(
'
 
'
,
 
'
.
'
,
 
'
-
'
,
 
'
,
'
,
 
'
,
 
'
)
,
 
'
'
,
 
$
v
a
t
_
n
u
m
b
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
y
C
o
d
e
 
=
 
s
u
b
s
t
r
(
$
v
a
t
N
u
m
b
e
r
,
 
0
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
t
N
u
m
b
e
r
 
=
 
s
u
b
s
t
r
(
$
v
a
t
N
u
m
b
e
r
,
 
2
,
 
s
t
r
l
e
n
(
$
v
a
t
N
u
m
b
e
r
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
c
o
u
n
t
r
y
C
o
d
e
)
 
!
=
 
2
 
|
|
 
i
s
_
n
u
m
e
r
i
c
(
s
u
b
s
t
r
(
$
c
o
u
n
t
r
y
C
o
d
e
,
 
0
,
 
1
)
)
 
|
|
 
i
s
_
n
u
m
e
r
i
c
(
s
u
b
s
t
r
(
$
c
o
u
n
t
r
y
C
o
d
e
,
 
1
,
 
2
)
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
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
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
'
r
e
s
u
l
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
 
'
m
e
s
s
a
g
e
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
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
S
Y
N
T
A
X
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
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
S
Y
N
T
A
X
'
,
 
f
a
l
s
e
)
,
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
=
>
 
$
c
o
u
n
t
r
y
C
o
d
e
.
$
v
a
t
N
u
m
b
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
'
0
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
 
=
 
$
c
o
u
n
t
r
y
C
o
d
e
.
$
v
a
t
N
u
m
b
e
r
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
L
I
B
R
A
R
I
E
S
_
A
B
S
P
A
T
H
.
'
n
u
s
o
a
p
'
.
J
R
D
S
.
'
n
u
s
o
a
p
.
p
h
p
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
i
e
n
t
 
=
 
n
e
w
 
n
u
s
o
a
p
_
c
l
i
e
n
t
(
'
h
t
t
p
:
/
/
e
c
.
e
u
r
o
p
a
.
e
u
/
t
a
x
a
t
i
o
n
_
c
u
s
t
o
m
s
/
v
i
e
s
/
c
h
e
c
k
V
a
t
S
e
r
v
i
c
e
.
w
s
d
l
'
,
 
'
w
s
d
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
r
a
m
s
 
=
 
a
r
r
a
y
(
'
c
o
u
n
t
r
y
C
o
d
e
'
 
=
>
 
$
c
o
u
n
t
r
y
C
o
d
e
,
 
'
v
a
t
N
u
m
b
e
r
'
 
=
>
 
$
v
a
t
N
u
m
b
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
$
c
l
i
e
n
t
-
>
c
a
l
l
(
'
c
h
e
c
k
V
a
t
'
,
 
$
p
a
r
a
m
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
!
$
r
e
s
u
l
t
)
 
{
 
/
/
 
O
d
d
l
y
,
 
a
t
 
l
e
a
s
t
 
o
n
e
 
v
a
l
i
d
 
v
a
t
 
n
u
m
b
e
r
 
i
s
 
r
e
t
u
r
n
e
d
 
a
s
 
f
a
l
s
e
,
 
s
o
 
w
e
'
l
l
 
d
o
u
b
l
e
 
c
h
e
c
k
 
t
h
e
 
r
e
s
p
o
n
s
e
 
s
t
r
i
n
g
 
t
o
 
s
e
e
 
i
f
 
i
t
 
c
o
n
t
a
i
n
s
 
<
v
a
l
i
d
>
t
r
u
e
<
/
v
a
l
i
d
>
.
 
I
f
 
s
o
,
 
w
e
'
l
l
 
m
a
n
u
a
l
l
y
 
s
e
t
 
t
h
e
 
r
e
s
p
o
n
s
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
x
m
l
t
x
t
 
=
 
t
r
i
m
(
s
u
b
s
t
r
(
$
c
l
i
e
n
t
-
>
r
e
s
p
o
n
s
e
,
 
s
t
r
p
o
s
(
$
c
l
i
e
n
t
-
>
r
e
s
p
o
n
s
e
,
 
'
<
s
o
a
p
:
E
n
v
e
l
o
p
e
'
)
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
i
s
t
r
(
$
x
m
l
t
x
t
,
 
'
<
v
a
l
i
d
>
t
r
u
e
<
/
v
a
l
i
d
>
'
)
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
 
'
v
a
t
_
n
u
m
b
e
r
'
 
]
 
=
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
'
v
a
l
i
d
'
 
]
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
u
l
t
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
y
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
k
e
y
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
v
a
l
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
 
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
1
0
;
'
,
 
'
 
'
,
 
$
v
a
l
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
e
y
 
]
 
=
 
$
v
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
[
 
'
v
a
l
i
d
'
 
]
 
!
=
 
'
t
r
u
e
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
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
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
'
r
e
s
u
l
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
 
'
m
e
s
s
a
g
e
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
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
C
O
U
L
D
N
O
T
V
A
L
I
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
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
C
O
U
L
D
N
O
T
V
A
L
I
D
A
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
,
 
'
r
e
s
p
o
n
s
e
_
c
o
n
t
e
n
t
'
 
=
>
 
$
r
e
s
u
l
t
s
,
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
=
>
 
$
c
o
u
n
t
r
y
C
o
d
e
.
$
v
a
t
N
u
m
b
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
'
0
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
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
'
r
e
s
u
l
t
'
 
=
>
 
t
r
u
e
,
 
'
m
e
s
s
a
g
e
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
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
V
A
L
I
D
A
T
E
D
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
V
I
E
S
_
V
A
T
C
H
E
C
K
_
I
N
C
O
R
R
E
C
T
_
V
A
L
I
D
A
T
E
D
'
,
 
f
a
l
s
e
)
,
 
'
r
e
s
p
o
n
s
e
_
c
o
n
t
e
n
t
'
 
=
>
 
$
r
e
s
u
l
t
s
,
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
=
>
 
$
c
o
u
n
t
r
y
C
o
d
e
.
$
v
a
t
N
u
m
b
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
'
1
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
l
i
d
a
t
i
o
n
_
m
e
s
s
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
'
r
e
s
u
l
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
 
'
m
e
s
s
a
g
e
'
 
=
>
 
'
'
,
 
'
c
l
e
a
n
_
v
a
t
_
n
o
'
 
=
>
 
'
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
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
'
0
'
;


 
 
 
 
 
 
 
 
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


 
 
 
 
/
*
*

 
 
 
 
 
*
 
W
h
a
t
 
t
o
 
d
o
 
w
h
e
n
 
t
h
e
 
p
a
r
s
e
r
 
f
i
n
d
s
 
a
 
s
t
a
r
t
 
e
l
e
m
e
n
t
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
$
p
a
r
s
e
r
 
o
b
j
e
c
t

 
 
 
 
 
*
 
@
p
a
r
a
m
 
$
e
l
e
m
e
n
t
_
n
a
m
e
 
s
t
r
i
n
g
 
n
a
m
e
 
o
f
 
t
h
e
 
e
l
e
m
e
n
t
 
f
o
u
n
d

 
 
 
 
 
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
E
l
e
m
e
n
t
(
$
p
a
r
s
e
r
,
 
$
e
l
e
m
e
n
t
_
n
a
m
e
,
 
$
a
t
t
r
i
b
u
t
e
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
e
l
e
m
e
n
t
_
n
a
m
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
V
A
L
I
D
'
:
 
$
t
h
i
s
-
>
o
u
t
p
u
t
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
o
u
t
p
u
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
W
h
a
t
 
t
o
 
d
o
 
w
h
e
n
 
t
h
e
 
p
a
r
s
e
r
 
f
i
n
d
s
 
a
 
c
l
o
s
i
n
g
 
e
l
e
m
e
n
t
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
$
p
a
r
s
e
r
 
o
b
j
e
c
t

 
 
 
 
 
*
 
@
p
a
r
a
m
 
$
e
l
e
m
e
n
t
_
n
a
m
e
 
s
t
r
i
n
g
 
n
a
m
e
 
o
f
 
t
h
e
 
e
l
e
m
e
n
t
 
f
o
u
n
d

 
 
 
 
 
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
E
l
e
m
e
n
t
(
$
p
a
r
s
e
r
,
 
$
e
l
e
m
e
n
t
_
n
a
m
e
)

 
 
 
 
{

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
W
h
a
t
 
t
o
 
d
o
 
w
h
e
n
 
t
h
e
 
p
a
r
s
e
r
 
f
i
n
d
s
 
d
a
t
a
 
i
n
 
t
h
e
 
e
l
e
m
e
n
t
.

 
 
 
 
 
*

 
 
 
 
 
*
 
@
p
a
r
a
m
 
$
p
a
r
s
e
r
 
o
b
j
e
c
t

 
 
 
 
 
*
 
@
p
a
r
a
m
 
$
x
m
l
_
d
a
t
a
 
s
t
r
i
n
g
 
d
a
t
a
 
f
o
u
n
d
 
i
n
 
b
e
t
w
e
e
n
 
t
a
g
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
 
c
h
a
r
a
c
t
e
r
D
a
t
a
(
$
p
a
r
s
e
r
,
 
$
x
m
l
_
d
a
t
a
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
o
u
t
p
u
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
x
m
l
_
d
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
x
m
l
_
d
a
t
a
 
=
=
 
'
f
a
l
s
e
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
v
a
l
i
d
v
a
t
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
x
m
l
_
d
a
t
a
 
=
=
 
'
t
r
u
e
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
v
a
l
i
d
v
a
t
i
d
 
=
 
t
r
u
e
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
o
u
t
p
u
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
/
/
 
T
h
e
 
p
u
r
p
o
s
e
 
o
f
 
t
h
i
s
 
m
e
t
h
o
d
 
i
s
 
f
o
r
 
i
t
 
t
o
 
b
e
 
p
a
s
s
e
d
 
a
 
c
o
u
n
t
r
y
 
c
o
d
e
 
t
h
a
t
'
s
 
b
e
e
n
 
p
u
l
l
e
d
 
f
r
o
m
 
a
 
V
A
T
 
n
u
m
b
e
r
,
 
a
n
d
 
t
o
 
c
o
n
v
e
r
t
 
i
t
 
t
o
 
a
 
c
o
u
n
t
r
y
 
c
o
d
e
 
t
h
a
t
 
J
o
m
r
e
s
 
w
i
l
l
 
r
e
c
o
g
n
i
s
e
.
 
C
o
u
n
t
r
i
e
s
 
l
i
k
e
 
G
r
e
e
c
e
 
u
s
e
 
E
L
 
i
n
s
t
e
a
d
 
o
f
 
J
o
m
r
e
s
'
 
G
R
,
 
s
o
 
w
e
 
n
e
e
d
 
t
o
 
p
a
s
s
 
E
L
,
 
c
y
c
l
e
 
t
h
r
o
u
g
h
 
t
h
e
 
x
r
e
f
 
a
r
r
a
y
 
u
n
t
i
l
 
w
e
 
f
i
n
d
 
t
h
a
t
 
c
o
d
e
,
 
t
h
e
n
 
r
e
t
u
r
n
 
t
h
e
 
k
e
y
,
 
w
h
i
c
h
 
w
o
u
l
d
 
b
e
 
G
R

 
 
 
 
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
a
d
j
u
s
t
e
d
_
c
o
u
n
t
r
y
_
c
o
d
e
(
$
c
o
u
n
t
r
y
_
c
o
d
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
x
r
e
f
_
a
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
_
e
u
r
o
_
c
o
u
n
t
r
y
_
x
r
e
f
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
x
r
e
f
_
a
r
r
a
y
 
a
s
 
$
j
o
m
r
e
s
_
c
o
u
n
t
r
y
_
c
o
d
e
 
=
>
 
$
v
a
t
_
n
u
m
b
e
r
_
c
o
u
n
t
r
y
_
c
o
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
r
y
_
c
o
d
e
 
=
=
 
$
v
a
t
_
n
u
m
b
e
r
_
c
o
u
n
t
r
y
_
c
o
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
j
o
m
r
e
s
_
c
o
u
n
t
r
y
_
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
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
_
e
u
r
o
_
c
o
u
n
t
r
i
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
 
a
r
r
a
y
(
'
A
T
'
 
=
>
 
'
A
u
s
t
r
i
a
'
,
 
'
B
E
'
 
=
>
 
'
B
e
l
g
i
u
m
'
,
 
'
H
R
'
 
=
>
 
'
C
r
o
a
t
i
a
'
,
 
'
C
Y
'
 
=
>
 
'
C
y
p
r
u
s
'
,
 
'
C
Z
'
 
=
>
 
'
C
z
e
c
h
 
R
.
u
b
l
i
c
'
,
 
'
D
K
'
 
=
>
 
'
D
e
n
m
a
r
k
'
,
 
'
E
E
'
 
=
>
 
'
E
s
t
o
n
i
a
'
,
 
'
F
I
'
 
=
>
 
'
F
i
n
l
a
n
d
'
,
 
'
F
R
'
 
=
>
 
'
F
r
a
n
c
e
'
,
 
'
D
E
'
 
=
>
 
'
G
e
r
m
a
n
y
'
,
 
'
G
R
'
 
=
>
 
'
G
r
e
e
c
e
'
,
 
'
H
U
'
 
=
>
 
'
H
u
n
g
a
r
y
'
,
 
'
I
E
'
 
=
>
 
'
I
r
e
l
a
n
d
'
,
 
'
I
T
'
 
=
>
 
'
I
t
a
l
y
'
,
 
'
L
V
'
 
=
>
 
'
L
a
t
v
i
a
'
,
 
'
L
T
'
 
=
>
 
'
L
i
t
h
u
a
n
i
a
'
,
 
'
L
U
'
 
=
>
 
'
L
u
x
e
m
b
o
u
r
g
'
,
 
'
M
T
'
 
=
>
 
'
M
a
l
t
a
'
,
 
'
N
L
'
 
=
>
 
'
N
e
t
h
e
r
l
a
n
d
s
'
,
 
'
P
L
'
 
=
>
 
'
P
o
l
a
n
d
'
,
 
'
P
T
'
 
=
>
 
'
P
o
r
t
u
g
a
l
'
,
 
'
S
K
'
 
=
>
 
'
S
l
o
v
a
k
i
a
'
,
 
'
S
I
'
 
=
>
 
'
S
l
o
v
e
n
i
a
'
,
 
'
E
S
'
 
=
>
 
'
S
p
a
i
n
'
,
 
'
S
E
'
 
=
>
 
'
S
w
e
d
e
n
'
,
 
'
G
B
'
 
=
>
 
'
U
n
i
t
e
d
 
K
i
n
g
d
o
m
'
,
 
'
R
O
'
 
=
>
 
'
R
o
m
a
n
i
a
'
,
 
'
B
G
'
 
=
>
 
'
B
u
l
g
a
r
i
a
'
,
 
'
H
R
'
 
=
>
 
'
C
r
o
a
t
i
a
'
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
_
e
u
r
o
_
c
o
u
n
t
r
y
_
x
r
e
f
(
)
 
/
/
 
G
r
e
e
c
e
 
u
s
e
 
d
i
f
f
e
r
e
n
t
 
c
o
d
e
s
,
 
i
n
 
o
u
r
 
d
a
t
a
b
a
s
e
 
t
h
e
y
'
r
e
 
G
R
,
 
b
u
t
 
f
o
r
 
V
A
T
 
n
u
m
b
e
r
s
 
t
h
e
y
'
r
e
 
u
s
i
n
g
 
E
L
,
 
s
o
 
w
e
'
l
l
 
n
e
e
d
 
a
 
c
r
o
s
s
 
r
e
f
e
r
e
n
c
e
 
i
n
 
c
a
s
e
 
a
 
n
e
w
 
j
o
i
n
e
r
 
c
r
e
a
t
e
s
 
t
h
e
 
s
a
m
e
 
s
i
t
u
a
t
i
o
n
 
i
n
 
t
h
e
 
f
u
t
u
r
e

 
 
 
 
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
A
T
'
 
=
>
 
'
A
T
'
,
 
'
B
E
'
 
=
>
 
'
B
E
'
,
 
'
H
R
'
 
=
>
 
'
H
R
'
,
 
'
C
Y
'
 
=
>
 
'
C
Y
'
,
 
'
C
Z
'
 
=
>
 
'
C
Z
'
,
 
'
D
K
'
 
=
>
 
'
D
K
'
,
 
'
E
E
'
 
=
>
 
'
E
E
'
,
 
'
F
I
'
 
=
>
 
'
F
E
'
,
 
'
F
R
'
 
=
>
 
'
F
R
'
,
 
'
D
E
'
 
=
>
 
'
D
E
'
,
 
'
G
R
'
 
=
>
 
'
E
L
'
,
 
'
H
U
'
 
=
>
 
'
H
U
'
,
 
'
I
E
'
 
=
>
 
'
I
E
'
,
 
'
I
T
'
 
=
>
 
'
I
T
'
,
 
'
L
V
'
 
=
>
 
'
L
V
'
,
 
'
L
T
'
 
=
>
 
'
L
T
'
,
 
'
L
U
'
 
=
>
 
'
L
U
'
,
 
'
M
T
'
 
=
>
 
'
M
T
'
,
 
'
N
L
'
 
=
>
 
'
N
L
'
,
 
'
P
L
'
 
=
>
 
'
P
L
'
,
 
'
P
T
'
 
=
>
 
'
P
T
'
,
 
'
S
K
'
 
=
>
 
'
S
K
'
,
 
'
S
I
'
 
=
>
 
'
S
I
'
,
 
'
E
S
'
 
=
>
 
'
E
S
'
,
 
'
S
E
'
 
=
>
 
'
S
E
'
,
 
'
G
B
'
 
=
>
 
'
G
B
'
,
 
'
R
O
'
 
=
>
 
'
R
O
'
,
 
'
B
G
'
 
=
>
 
'
B
G
'
,
 
'
H
R
'
 
=
>
 
'
H
R
'
)
;

 
 
 
 
}

}

