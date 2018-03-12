
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
0
6
0
0
1
d
a
s
h
b
o
a
r
d
_
i
n
s
e
r
t
b
o
o
k
i
n
g
_
a
j
a
x

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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
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
t
e
m
p
l
a
t
e
_
t
o
u
c
h
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
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
f
a
l
s
e
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
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
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
u
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
i
f
 
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
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
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
,
 
$
t
h
i
s
J
R
U
s
e
r
-
>
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
i
n
s
e
r
t
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
 
=
 
n
e
w
 
j
o
m
r
e
s
_
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
i
n
s
e
r
t
(
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


 
 
 
 
 
 
 
 
/
/
 
L
e
t
`
s
 
h
a
n
d
l
e
 
s
o
m
e
 
p
a
s
s
e
d
 
v
a
r
i
a
b
l
e
s
 
f
i
r
s
t

 
 
 
 
 
 
 
 
$
r
o
o
m
_
u
i
d
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
r
o
o
m
_
u
i
d
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
s
t
a
r
t
D
a
t
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
s
t
a
r
t
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
e
n
d
D
a
t
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
n
d
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
s
t
a
r
t
D
a
t
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
 
=
 
'
E
r
r
o
r
:
 
A
n
 
e
m
p
t
y
 
s
t
a
r
t
 
d
a
t
e
 
w
a
s
 
s
e
n
t
 
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
a
r
r
a
y
(
'
i
n
s
e
r
t
S
t
a
t
u
s
'
 
=
>
 
0
,
 
'
i
n
s
e
r
t
M
e
s
s
a
g
e
'
 
=
>
 
$
i
n
s
e
r
t
M
e
s
s
a
g
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
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
e
n
d
D
a
t
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
 
=
 
'
E
r
r
o
r
:
 
A
n
 
e
m
p
t
y
 
e
n
d
 
d
a
t
e
 
w
a
s
 
s
e
n
t
 
:
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
a
r
r
a
y
(
'
i
n
s
e
r
t
S
t
a
t
u
s
'
 
=
>
 
0
,
 
'
i
n
s
e
r
t
M
e
s
s
a
g
e
'
 
=
>
 
$
i
n
s
e
r
t
M
e
s
s
a
g
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
s
t
a
r
t
D
a
t
e
)
)
;

 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
e
n
d
D
a
t
e
)
)
;

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
w
h
o
l
e
d
a
y
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
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
D
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
e
n
d
D
a
t
e
.
'
-
1
 
d
a
y
'
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
D
a
y
 
=
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
d
a
t
e
s
_
a
r
r
a
y
 
=
 
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
a
r
r
i
v
a
l
D
a
t
e
,
 
$
l
a
s
t
D
a
y
)
;

 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
p
a
i
d
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
d
e
p
o
s
i
t
_
p
a
i
d
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
_
i
n
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
b
o
o
k
e
d
_
i
n
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
n
u
m
b
e
r
 
=
 
s
e
t
_
b
o
o
k
i
n
g
_
n
u
m
b
e
r
(
)
;

 
 
 
 
 
 
 
 
$
f
i
r
s
t
n
a
m
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
f
i
r
s
t
n
a
m
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
s
u
r
n
a
m
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
s
u
r
n
a
m
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
(
f
l
o
a
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
_
n
e
t
t
 
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
g
e
t
_
n
e
t
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
r
i
c
e
(
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
,
 
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
a
x
 
=
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
-
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
_
n
e
t
t
;


 
 
 
 
 
 
 
 
i
f
 
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
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
 
=
 
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
g
l
o
b
a
l
C
u
r
r
e
n
c
y
C
o
d
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
c
u
r
r
e
n
c
y
_
c
o
d
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
u
r
r
e
n
c
y
c
o
d
e
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
L
e
t
`
s
 
c
h
e
c
k
 
t
h
a
t
 
w
e
 
h
a
v
e
 
a
 
r
o
o
m
_
u
i
d
 
a
n
d
 
t
h
e
 
r
o
o
m
 
c
a
n
 
b
e
 
b
o
o
k
e
d
,
 
o
t
h
e
r
w
i
s
e
 
s
t
o
p
 
h
e
r
e

 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
 
=
 
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
 
u
i
d
 
n
o
t
 
s
e
t
.
 
E
x
i
t
t
i
n
g
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
a
r
r
a
y
(
'
i
n
s
e
r
t
S
t
a
t
u
s
'
 
=
>
 
0
,
 
'
i
n
s
e
r
t
M
e
s
s
a
g
e
'
 
=
>
 
$
i
n
s
e
r
t
M
e
s
s
a
g
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
 
c
o
n
t
r
a
c
t
_
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
r
o
o
m
_
b
o
o
k
i
n
g
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
 
'
"
.
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
 
A
N
D
 
`
r
o
o
m
_
u
i
d
`
=
'
"
.
$
r
o
o
m
_
u
i
d
.
"
'
 
A
N
D
 
`
d
a
t
e
`
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
d
a
t
e
s
_
a
r
r
a
y
,
 
f
a
l
s
e
)
.
'
)
'
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
s
L
i
s
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
b
o
o
k
i
n
g
s
L
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
 
=
 
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
 
a
l
r
e
a
d
y
 
b
o
o
k
e
d
.
 
E
x
i
t
t
i
n
g
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
a
r
r
a
y
(
'
i
n
s
e
r
t
S
t
a
t
u
s
'
 
=
>
 
0
,
 
'
i
n
s
e
r
t
M
e
s
s
a
g
e
'
 
=
>
 
$
i
n
s
e
r
t
M
e
s
s
a
g
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
O
K
,
 
l
e
t
`
s
 
m
o
v
e
 
o
n
 
a
n
d
 
s
e
t
 
t
h
e
 
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
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
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
 
=
 
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

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
 
=
 
$
a
r
r
i
v
a
l
D
a
t
e
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
 
=
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
e
q
u
e
s
t
e
d
R
o
o
m
'
]
 
=
 
$
r
o
o
m
_
u
i
d
.
'
^
0
'
;
 
/
/
i
t
 
n
e
e
d
s
 
t
o
 
h
a
v
e
 
t
h
e
 
^
t
a
r
i
f
f
_
u
i
d
 
t
o
o

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
a
t
e
R
a
n
g
e
S
t
r
i
n
g
'
]
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
 
$
d
a
t
e
s
_
a
r
r
a
y
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
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
'
]
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
x
i
s
t
i
n
g
_
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
]
 
=
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
t
a
x
'
]
 
=
 
$
t
a
x
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
]
 
=
 
(
f
l
o
a
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
o
o
m
_
t
o
t
a
l
'
]
 
=
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
_
n
e
t
t
;
 
/
/
h
a
s
 
t
o
 
b
e
 
w
i
t
h
o
u
t
 
t
a
x

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
r
o
o
m
_
t
o
t
a
l
_
n
o
d
i
s
c
o
u
n
t
'
]
 
=
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
_
n
e
t
t
;
 
/
/
h
a
s
 
t
o
 
b
e
 
w
i
t
h
o
u
t
 
t
a
x

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
c
u
r
r
e
n
c
y
_
c
o
d
e
'
]
 
=
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
d
e
p
o
s
i
t
p
a
i
d
s
u
c
c
e
s
s
f
u
l
l
y
'
]
 
=
 
(
b
o
o
l
)
 
$
d
e
p
o
s
i
t
_
p
a
i
d
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
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
c
u
r
r
e
n
c
y
c
o
d
e
'
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
c
u
r
r
e
n
c
y
C
o
d
e
'
,
 
'
G
B
P
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
b
o
o
k
i
n
g
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
b
o
o
k
i
n
g
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
b
o
o
k
e
d
_
i
n
'
]
 
=
 
(
b
o
o
l
)
 
$
b
o
o
k
e
d
_
i
n
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
s
e
n
d
G
u
e
s
t
E
m
a
i
l
'
]
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
b
o
o
k
i
n
g
_
d
e
t
a
i
l
s
[
'
s
e
n
d
H
o
t
e
l
E
m
a
i
l
'
]
 
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
/
/
N
o
w
 
l
e
t
`
s
 
s
e
t
 
t
h
e
 
n
e
w
 
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

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
e
x
i
s
t
i
n
g
_
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
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
x
i
s
t
i
n
g
_
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
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
'
]
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
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
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
f
i
r
s
t
n
a
m
e
'
]
 
=
 
$
f
i
r
s
t
n
a
m
e
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
s
u
r
n
a
m
e
'
]
 
=
 
$
s
u
r
n
a
m
e
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
h
o
u
s
e
'
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
h
o
u
s
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
s
t
r
e
e
t
'
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
s
t
r
e
e
t
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
t
o
w
n
'
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
t
o
w
n
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
r
e
g
i
o
n
'
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
r
e
g
i
o
n
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
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
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
g
u
e
s
t
_
c
o
u
n
t
r
y
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
p
o
s
t
c
o
d
e
'
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
p
o
s
t
c
o
d
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
t
e
l
_
l
a
n
d
l
i
n
e
'
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
l
a
n
d
l
i
n
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
t
e
l
_
m
o
b
i
l
e
'
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
m
o
b
i
l
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
g
u
e
s
t
_
d
e
t
a
i
l
s
[
'
e
m
a
i
l
'
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
m
a
i
l
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
/
/
F
i
n
a
l
l
y
 
l
e
t
`
s
 
i
n
s
e
r
t
 
t
h
e
 
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

 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
 
$
b
k
g
-
>
c
r
e
a
t
e
_
b
o
o
k
i
n
g
(
)
;


 
 
 
 
 
 
 
 
/
/
D
s
i
p
l
a
y
 
t
h
e
 
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
 
o
n
 
t
h
e
 
d
a
s
h
b
o
a
r
d

 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
 
=
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
(
s
t
r
i
n
g
)
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
 
'
0
3
0
2
0
'
 
]
[
 
'
i
n
s
e
r
t
b
o
o
k
i
n
g
'
 
]
[
'
c
o
n
t
r
a
c
t
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
s
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
n
e
w
_
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
,
 
$
b
o
o
k
i
n
g
_
n
u
m
b
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
s
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
n
e
w
_
b
o
o
k
i
n
g
_
i
d
'
,
 
$
c
o
n
t
r
a
c
t
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
n
u
m
b
e
r
 
=
 
(
s
t
r
i
n
g
)
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
 
'
0
3
0
2
0
'
 
]
[
 
'
i
n
s
e
r
t
b
o
o
k
i
n
g
'
 
]
[
'
c
a
r
t
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
u
r
l
 
=
 
j
o
m
r
e
s
U
r
l
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
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
&
c
o
n
t
r
a
c
t
_
u
i
d
=
'
.
$
c
o
n
t
r
a
c
t
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
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
B
O
O
K
I
N
G
_
N
U
M
B
E
R
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
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
f
a
l
s
e
)
.
'
:
 
'
.
$
b
o
o
k
i
n
g
_
n
u
m
b
e
r
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
.
=
 
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
H
F
R
O
M
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
H
F
R
O
M
'
,
 
f
a
l
s
e
)
.
'
:
 
'
.
o
u
t
p
u
t
D
a
t
e
(
$
s
t
a
r
t
D
a
t
e
)
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
.
=
 
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
H
T
O
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
H
T
O
'
,
 
f
a
l
s
e
)
.
'
:
 
'
.
o
u
t
p
u
t
D
a
t
e
(
$
e
n
d
D
a
t
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
o
m
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
s
t
a
r
t
D
a
t
e
)
)
.
'
T
1
2
:
0
0
:
0
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
e
n
d
D
a
t
e
)
)
.
'
T
1
1
:
5
9
:
5
9
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
w
h
o
l
e
d
a
y
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
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
r
o
m
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
s
t
a
r
t
D
a
t
e
)
)
.
'
T
0
0
:
0
0
:
0
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
e
n
d
D
a
t
e
)
)
.
'
T
2
3
:
5
9
:
5
9
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
 
=
 
'
B
o
o
k
i
n
g
 
s
a
v
e
d
 
s
u
c
c
e
s
s
f
u
l
l
y
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
_
p
e
n
d
i
n
g
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
g
r
e
y
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
_
a
r
r
i
v
e
t
o
d
a
y
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
o
r
a
n
g
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
_
r
e
s
i
d
e
n
t
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
g
r
e
e
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
_
d
e
p
a
r
t
t
o
d
a
y
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
b
l
u
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
_
s
t
i
l
l
h
e
r
e
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
p
u
r
p
l
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
_
l
a
t
e
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
r
e
d
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
d
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
d
a
y
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
a
r
r
i
v
a
l
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
A
r
r
i
v
a
l
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
p
e
n
d
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
A
r
r
i
v
a
l
 
=
=
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
_
i
n
 
!
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
a
r
r
i
v
e
t
o
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
=
=
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
_
i
n
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
d
e
p
a
r
t
t
o
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
A
r
r
i
v
a
l
 
<
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
_
i
n
 
!
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
l
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
>
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
_
i
n
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
r
e
s
i
d
e
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
<
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
b
o
o
k
e
d
_
i
n
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
s
t
i
l
l
h
e
r
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
t
h
e
 
g
u
e
s
t
 
i
s
 
s
t
i
l
l
 
h
e
r
e
 
e
v
e
n
 
i
f
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
h
a
s
 
p
a
s
s
e
d
,
 
s
o
 
l
e
t
`
s
 
a
d
j
u
s
t
 
t
h
e
 
e
v
e
n
t
 
s
i
z
e
.
 
I
f
 
i
t
 
o
v
e
r
l
a
p
s
 
w
i
t
h
 
o
t
h
e
r
 
b
o
o
k
i
n
g
,
 
i
t
 
w
i
l
l
 
b
e
 
c
l
e
a
r
l
y
 
v
i
s
i
b
l
e
 
i
n
 
t
h
e
 
d
a
s
h
b
o
a
r
d
.
 
R
e
c
e
p
t
i
o
n
i
s
t
s
 
c
a
n
 
t
h
e
n
 
a
m
e
n
d
 
b
o
o
k
i
n
g
s
.

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
m
g
T
o
S
h
o
w
 
=
=
 
$
i
m
g
_
s
t
i
l
l
h
e
r
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
w
h
o
l
e
d
a
y
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
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
t
o
d
a
y
)
)
.
'
T
1
1
:
5
9
:
5
9
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
t
o
d
a
y
)
)
.
'
T
2
3
:
5
9
:
5
9
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
c
o
n
t
r
a
c
t
 
=
 
a
r
r
a
y
(
'
i
n
s
e
r
t
S
t
a
t
u
s
'
 
=
>
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
s
e
r
t
M
e
s
s
a
g
e
'
 
=
>
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
d
'
 
=
>
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
'
_
'
.
$
r
o
o
m
_
u
i
d
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
s
t
a
r
t
'
 
=
>
 
$
f
r
o
m
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
e
n
d
'
 
=
>
 
$
t
o
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
t
i
t
l
e
'
 
=
>
 
$
f
i
r
s
t
n
a
m
e
.
'
 
'
.
$
s
u
r
n
a
m
e
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
u
r
l
'
 
=
>
 
$
u
r
l
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
s
o
u
r
c
e
I
d
'
 
=
>
 
$
r
o
o
m
_
u
i
d
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
c
l
a
s
s
N
a
m
e
'
 
=
>
 
$
i
m
g
T
o
S
h
o
w
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
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
'
 
=
>
 
$
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
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
c
o
n
t
r
a
c
t
_
u
i
d
'
 
=
>
 
$
c
o
n
t
r
a
c
t
_
u
i
d
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
r
o
o
m
_
u
i
d
'
 
=
>
 
$
r
o
o
m
_
u
i
d
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
t
h
i
s
_
c
o
n
t
r
a
c
t
_
r
o
o
m
_
u
i
d
s
'
 
=
>
 
a
r
r
a
y
(
'
0
'
 
=
>
 
$
r
o
o
m
_
u
i
d
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
c
l
e
a
n
 
t
h
e
 
b
u
f
f
e
r
 
f
r
o
m
 
a
n
y
 
o
t
h
e
r
 
o
u
t
p
u
t
 
(
o
t
h
e
r
 
e
c
h
o
s
,
 
f
o
r
 
e
x
a
m
p
l
e
 
i
f
 
e
m
a
i
l
s
 
s
e
n
d
i
n
g
 
f
a
i
l
e
d
)
 
a
n
d
 
e
c
h
o
 
j
u
s
t
 
t
h
e
 
j
s
o
n

 
 
 
 
 
 
 
 
 
 
 
 
o
b
_
c
l
e
a
n
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
n
e
w
_
c
o
n
t
r
a
c
t
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
e
r
t
M
e
s
s
a
g
e
 
=
 
$
i
n
s
e
r
t
S
u
c
c
e
s
s
f
u
l
;


 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
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
a
r
r
a
y
(
'
i
n
s
e
r
t
S
t
a
t
u
s
'
 
=
>
 
0
,
 
'
i
n
s
e
r
t
M
e
s
s
a
g
e
'
 
=
>
 
$
i
n
s
e
r
t
M
e
s
s
a
g
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
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
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
R
e
t
V
a
l
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
r
e
t
V
a
l
s
;

 
 
 
 
}

}

