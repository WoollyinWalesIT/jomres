
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
r
o
o
m
_
t
y
p
e
s

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
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
r
o
o
m
_
t
y
p
e
s
 
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
a
l
l
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
 
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
a
l
l
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
s
 
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
t
h
i
s
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
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
r
o
o
m
_
t
y
p
e
 
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
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
=
 
0
;
 
 
 
 
 
 
 
 
/
/
 
n
e
w
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
i
d
 
d
e
f
a
u
l
t

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
]
 
=
 
'
'
;
 
 
 
 
 
 
 
 
/
/
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
n
a
m
e
;
 
T
O
D
O
:
 
m
a
k
e
 
i
t
 
u
s
e
 
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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
'
]
 
=
 
'
'
;
 
 
 
 
 
 
 
 
/
/
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
d
e
s
c
r
i
p
t
i
o
n
 
-
 
n
o
t
 
u
s
e
d

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
i
m
a
g
e
'
]
 
=
 
'
'
;
 
 
 
 
 
 
 
 
/
/
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
i
c
o
n
 
p
a
t
h

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
p
t
y
p
e
_
x
r
e
f
'
]
 
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
/
 
p
r
o
p
e
r
t
y
 
t
y
p
e
s
 
t
h
a
t
 
t
h
i
s
 
r
o
o
m
 
t
y
p
e
 
i
s
 
a
s
s
i
g
n
e
d
 
t
o

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
/
/
 
G
e
t
 
a
l
l
 
r
o
o
m
 
t
y
p
e
s
 
d
e
t
a
i
l
s

 
 
 
 
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
l
l
_
r
o
o
m
_
t
y
p
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
s
)
)
 
{
 
/
/
a
l
r
e
a
d
y
 
e
x
e
c
u
t
e
d
,
 
b
u
t
 
t
h
e
r
e
 
a
r
e
 
n
o
 
r
o
o
m
 
t
y
p
e
s
 
c
r
e
a
t
e
d
 
y
e
t
,
 
s
o
 
t
h
e
 
a
r
r
a
y
 
i
s
 
e
m
p
t
y
,
 
o
r
 
t
h
e
 
d
a
t
a
 
i
s
 
r
e
t
r
e
i
v
e
d
 
f
r
o
m
 
c
a
c
h
e

 
 
 
 
 
 
 
 
 
 
 
 
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
r
o
o
m
_
t
y
p
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
r
o
o
m
 
t
y
p
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
x
r
e
f
s

 
 
 
 
 
 
 
 
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
x
r
e
f
s
(
)
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
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
`
,
 
`
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
`
,
 
`
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
`
,
 
`
i
m
a
g
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
r
o
o
m
_
c
l
a
s
s
e
s
 
W
H
E
R
E
 
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
 
0
 
O
R
D
E
R
 
B
Y
 
`
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
`
 
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
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
]
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
]
[
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
]
 
=
 
$
r
-
>
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
]
[
'
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
'
]
 
=
 
$
r
-
>
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
 
=
 
$
r
-
>
i
m
a
g
e
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
t
h
i
s
-
>
a
l
l
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
r
o
o
m
_
t
y
p
e
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
]
[
'
p
t
y
p
e
_
x
r
e
f
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
a
l
l
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
r
o
o
m
_
t
y
p
e
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
]
[
'
p
t
y
p
e
_
x
r
e
f
'
]
 
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
/
G
e
t
 
r
o
o
m
 
t
y
p
e
 
d
e
t
a
i
l
s
 
b
y
 
r
o
o
m
 
t
y
p
e
 
i
d

 
 
 
 
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
r
o
o
m
_
t
y
p
e
(
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
s
)
 
&
&
 
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
r
o
o
m
_
t
y
p
e
s
[
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
r
o
o
m
_
t
y
p
e
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
s
[
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
]
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
t
h
i
s
-
>
a
l
l
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
[
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
t
h
i
s
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
[
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
]
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
a
l
l
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
[
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
r
o
o
m
 
t
y
p
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
x
r
e
f
s

 
 
 
 
 
 
 
 
 
 
 
 
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
x
r
e
f
s
(
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
`
,
 
`
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
`
,
 
`
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
`
,
 
`
i
m
a
g
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
r
o
o
m
_
c
l
a
s
s
e
s
 
W
H
E
R
E
 
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
 
0
 
A
N
D
 
`
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
=
 
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
]
 
=
 
$
r
-
>
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
'
]
 
=
 
$
r
-
>
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
i
m
a
g
e
'
]
 
=
 
$
r
-
>
i
m
a
g
e
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
t
h
i
s
-
>
t
h
i
s
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
r
o
o
m
_
t
y
p
e
[
'
p
t
y
p
e
_
x
r
e
f
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
t
h
i
s
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
[
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
r
o
o
m
_
t
y
p
e
[
'
p
t
y
p
e
_
x
r
e
f
'
]
 
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
/
S
a
v
e
 
n
e
w
 
o
r
 
e
x
i
s
t
i
n
g
 
r
e
s
o
u
r
c
e
 
t
y
p
e

 
 
 
 
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
r
o
o
m
_
t
y
p
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
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
>
 
0
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
r
o
o
m
_
c
l
a
s
s
e
s
 

	
	
	
	
	
	
S
E
T
 

	
	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
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
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
]
.
"
'
,
 

	
	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
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
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
'
]
.
"
'
,

	
	
	
	
	
	
	
`
i
m
a
g
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
r
o
o
m
_
t
y
p
e
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
"
'

	
	
	
	
	
	
W
H
E
R
E
 
`
r
o
o
m
_
c
l
a
s
s
e
s
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
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
 
f
a
l
s
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
E
r
r
o
r
:
 
E
x
i
s
t
i
n
g
 
r
o
o
m
 
t
y
p
e
 
u
p
d
a
t
e
 
f
a
i
l
e
d
.
'
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
r
o
o
m
_
c
l
a
s
s
e
s
 

	
	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
`
 
,

	
	
	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
`
,

	
	
	
	
	
	
	
	
`
i
m
a
g
e
`
,

	
	
	
	
	
	
	
	
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
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
'
]
.
"
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
r
o
o
m
_
t
y
p
e
[
'
r
o
o
m
_
c
l
a
s
s
_
f
u
l
l
_
d
e
s
c
'
]
.
"
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
r
o
o
m
_
t
y
p
e
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
"
'
,

	
	
	
	
	
	
	
	
0

	
	
	
	
	
	
	
	
)

	
	
	
	
	
	
	
	
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
_
i
d
 
=
 
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
r
o
o
m
t
y
p
e
_
i
d
 
>
 
0
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
u
p
d
a
t
e
_
r
o
o
m
t
y
p
e
_
p
r
o
p
e
r
t
y
t
y
p
e
_
x
r
e
f
_
t
a
b
l
e
(
$
r
o
o
m
t
y
p
e
_
i
d
,
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
[
'
p
t
y
p
e
_
x
r
e
f
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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


 
 
 
 
/
/
u
p
d
a
t
e
 
r
o
o
m
 
t
y
p
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
x
r
e
f

 
 
 
 
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
 
u
p
d
a
t
e
_
r
o
o
m
t
y
p
e
_
p
r
o
p
e
r
t
y
t
y
p
e
_
x
r
e
f
_
t
a
b
l
e
(
$
r
o
o
m
t
y
p
e
_
i
d
 
=
 
0
,
 
$
p
t
y
p
e
_
x
r
e
f
 
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

 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
t
y
p
e
_
i
d
 
=
=
 
0
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
E
r
r
o
r
:
 
R
o
o
m
 
t
y
p
e
 
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
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
r
o
o
m
t
y
p
e
s
_
p
r
o
p
e
r
t
y
t
y
p
e
s
_
x
r
e
f
 
W
H
E
R
E
 
`
r
o
o
m
t
y
p
e
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
r
o
o
m
t
y
p
e
_
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
 
f
a
l
s
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
E
r
r
o
r
:
 
R
o
o
m
 
t
y
p
e
 
p
t
y
p
e
 
x
r
e
f
 
d
e
l
e
t
e
 
f
a
i
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
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
p
t
y
p
e
_
x
r
e
f
)
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
p
t
y
p
e
_
x
r
e
f
 
a
s
 
$
p
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
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
r
o
o
m
t
y
p
e
s
_
p
r
o
p
e
r
t
y
t
y
p
e
s
_
x
r
e
f
 
(
`
r
o
o
m
t
y
p
e
_
i
d
`
,
`
p
r
o
p
e
r
t
y
t
y
p
e
_
i
d
`
)
 
V
A
L
U
E
S
 
(
'
.
(
i
n
t
)
 
$
r
o
o
m
t
y
p
e
_
i
d
.
'
,
'
.
(
i
n
t
)
 
$
p
t
y
p
e
.
'
)
'
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
 
'
'
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
E
r
r
o
r
:
 
R
o
o
m
 
t
y
p
e
 
p
t
y
p
e
 
x
r
e
f
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
/
D
e
l
e
t
e
 
r
e
s
o
u
r
c
e
 
t
y
p
e

 
 
 
 
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
 
d
e
l
e
t
e
_
r
o
o
m
_
t
y
p
e
(
$
i
d
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
s
u
c
c
e
s
s
 
=
 
t
r
u
e
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
i
d
s
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
r
o
o
m
s
 
W
H
E
R
E
 
r
o
o
m
_
c
l
a
s
s
e
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
s
u
c
c
e
s
s
 
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
D
E
L
E
T
E
 
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
r
o
o
m
_
c
l
a
s
s
e
s
 
W
H
E
R
E
 
`
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
`
 
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
"
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
 
f
a
l
s
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
c
c
e
s
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
D
E
L
E
T
E
 
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
r
o
o
m
t
y
p
e
s
_
p
r
o
p
e
r
t
y
t
y
p
e
s
_
x
r
e
f
 
W
H
E
R
E
 
`
r
o
o
m
t
y
p
e
_
i
d
`
 
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
"
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
 
f
a
l
s
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
c
c
e
s
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
s
u
c
c
e
s
s
;

 
 
 
 
}


 
 
 
 
/
/
g
e
t
 
r
o
o
m
 
t
y
p
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
x
r
e
f
s
,
 
a
l
l
 
o
r
 
b
y
 
r
o
o
m
 
t
y
p
e
 
i
d

 
 
 
 
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
x
r
e
f
s
(
$
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
a
l
l
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
'
;


 
 
 
 
 
 
 
 
i
f
 
(
$
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
W
H
E
R
E
 
`
r
o
o
m
t
y
p
e
_
i
d
`
 
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
a
l
l
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
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
a
l
l
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
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
 
`
r
o
o
m
t
y
p
e
_
i
d
`
,
 
`
p
r
o
p
e
r
t
y
t
y
p
e
_
i
d
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
r
o
o
m
t
y
p
e
s
_
p
r
o
p
e
r
t
y
t
y
p
e
s
_
x
r
e
f
 
$
c
l
a
u
s
e
 
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
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
t
h
i
s
 
r
o
o
m
 
t
y
p
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
x
r
e
f
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
h
i
s
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
[
$
r
-
>
r
o
o
m
t
y
p
e
_
i
d
]
[
]
 
=
 
$
r
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
t
y
p
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
t
h
i
s
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
r
o
o
m
 
t
y
p
e
 
x
r
e
f
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
h
i
s
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
s
[
$
r
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
t
y
p
e
_
i
d
]
[
]
 
=
 
$
r
-
>
r
o
o
m
t
y
p
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
a
l
l
 
r
o
o
m
 
t
y
p
e
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
x
r
e
f
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
r
t
y
p
e
_
p
t
y
p
e
_
x
r
e
f
s
[
$
r
-
>
r
o
o
m
t
y
p
e
_
i
d
]
[
]
 
=
 
$
r
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
t
y
p
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
a
l
l
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
r
o
o
m
 
t
y
p
e
 
x
r
e
f
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
s
[
$
r
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
t
y
p
e
_
i
d
]
[
]
 
=
 
$
r
-
>
r
o
o
m
t
y
p
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
l
l
_
r
o
o
m
_
t
y
p
e
_
i
m
a
g
e
s
(
)

	
{

	
	
$
i
m
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
(
'
r
m
t
y
p
e
s
'
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
'
r
m
t
y
p
e
s
'
]
 
a
s
 
$
i
m
a
g
e
)
 

	
	
	
{

	
	
	
$
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
r
[
 
'
I
M
A
G
E
_
F
I
L
E
N
A
M
E
'
 
]
 
=
 
s
u
b
s
t
r
(
$
i
m
a
g
e
[
'
l
a
r
g
e
'
]
,
 
s
t
r
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
[
'
l
a
r
g
e
'
]
,
 
'
/
'
)
 
+
 
1
)
;

	
	
	
$
r
[
 
'
I
M
A
G
E
_
S
R
C
'
 
]
 
 
=
 
$
i
m
a
g
e
[
'
l
a
r
g
e
'
]
;

	
	
	

	
	
	
$
i
m
a
g
e
s
[
]
 
=
 
$
r
;

	
	
	
}


	
	
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
s
;

	
}

}

