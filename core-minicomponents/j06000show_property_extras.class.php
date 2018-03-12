
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
0
s
h
o
w
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
e
x
t
r
a
s

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
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
d
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
a
s
k
'
 
=
>
 
'
s
h
o
w
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
e
x
t
r
a
s
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
E
X
T
R
A
S
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
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
0
 
=
>
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
_
P
R
O
P
E
R
T
Y
_
E
X
T
R
A
S
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
n
u
l
l
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
)
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
 
(
i
n
t
)
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
R
E
Q
U
E
S
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

 
 
 
 
 
 
 
 
}

	
	

	
	
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
!
u
s
e
r
_
c
a
n
_
v
i
e
w
_
t
h
i
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
[
'
o
u
t
p
u
t
_
n
o
w
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
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
[
'
o
u
t
p
u
t
_
n
o
w
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
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
i
f
 
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
s
h
o
w
E
x
t
r
a
s
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
i
m
a
g
e
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
,
 
a
r
r
a
y
(
'
e
x
t
r
a
s
'
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
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
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
t
a
i
l
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
u
i
d
`
,
`
n
a
m
e
`
,
`
d
e
s
c
`
,
`
m
a
x
q
u
a
n
t
i
t
y
`
,
`
p
r
i
c
e
`
,
`
a
u
t
o
_
s
e
l
e
c
t
`
,
`
t
a
x
_
r
a
t
e
`
,
`
c
h
a
r
g
a
b
l
e
d
a
i
l
y
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
,
`
p
u
b
l
i
s
h
e
d
`
,
`
v
a
l
i
d
f
r
o
m
`
,
`
v
a
l
i
d
t
o
`
 
F
R
O
M
 
`
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
e
x
t
r
a
s
`
 
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
'
 
A
N
D
 
`
p
u
b
l
i
s
h
e
d
`
 
=
 
1
 
A
N
D
 
`
i
n
c
l
u
d
e
_
i
n
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
l
i
s
t
s
`
 
=
 
1
 
O
R
D
E
R
 
B
Y
 
`
n
a
m
e
`
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
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
e
x
L
i
s
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
e
x
L
i
s
t
 
a
s
 
$
e
x
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
e
x
-
>
p
r
i
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
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
e
x
-
>
t
a
x
_
r
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
i
s
o
r
 
=
 
(
$
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
p
r
i
c
e
 
/
 
$
d
i
v
i
s
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
 
=
 
(
$
p
r
i
c
e
 
/
 
1
0
0
)
 
*
 
$
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
c
_
p
r
i
c
e
 
=
 
$
p
r
i
c
e
 
+
 
$
t
a
x
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
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


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
U
I
D
'
 
]
 
=
 
$
e
x
-
>
u
i
d
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
f
o
r
c
e
`
,
`
m
o
d
e
l
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
c
o
m
p
_
e
x
t
r
a
s
m
o
d
e
l
s
_
m
o
d
e
l
s
 
W
H
E
R
E
 
e
x
t
r
a
_
i
d
 
=
 
'
.
$
e
x
-
>
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
m
o
d
e
l
[
 
'
m
o
d
e
l
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
1
'
:
 
/
/
 
P
e
r
 
w
e
e
k

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
W
E
E
K
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
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
W
E
E
K
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
2
'
:
 
/
/
 
p
e
r
 
d
a
y
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
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
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
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
3
'
:
 
/
/
 
p
e
r
 
b
o
o
k
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
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
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
B
O
O
K
I
N
G
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
4
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
b
o
o
k
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
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
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
B
O
O
K
I
N
G
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
5
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
d
a
y

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
D
A
Y
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
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
D
A
Y
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
6
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
w
e
e
k

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
W
E
E
K
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
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
P
E
R
S
O
N
P
E
R
W
E
E
K
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
7
'
:
 
/
/
 
p
e
r
 
p
e
r
s
o
n
 
p
e
r
 
d
a
y
s
 
m
i
n
 
d
a
y
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
M
I
N
D
A
Y
S
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
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
M
I
N
D
A
Y
S
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
8
'
:
 
/
/
 
p
e
r
 
d
a
y
s
 
p
e
r
 
r
o
o
m

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
P
E
R
R
O
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
D
A
Y
S
P
E
R
R
O
O
M
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
9
'
:
 
/
/
 
p
e
r
 
r
o
o
m

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
R
O
O
M
P
E
R
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
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
M
O
D
E
L
_
P
E
R
R
O
O
M
P
E
R
B
O
O
K
I
N
G
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
1
0
0
'
:
 
/
/
 
C
o
m
m
i
s
s
i
o
n

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
l
_
t
e
x
t
 
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
C
O
M
M
I
S
S
I
O
N
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
M
I
S
S
I
O
N
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
_
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
a
t
e
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
x
_
o
u
t
p
u
t
 
=
 
'
 
(
'
.
$
r
a
t
e
.
'
%
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
N
A
M
E
'
 
]
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
N
A
M
E
'
.
$
e
x
-
>
u
i
d
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
e
x
-
>
n
a
m
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
M
O
D
E
L
T
E
X
T
'
 
]
 
=
 
$
t
a
x
_
o
u
t
p
u
t
.
'
 
(
 
'
.
$
m
o
d
e
l
_
t
e
x
t
.
'
 
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
	
i
f
 
(
$
m
o
d
e
l
[
 
'
m
o
d
e
l
'
 
]
 
=
=
 
'
1
0
0
'
)
 
{

	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
R
I
C
E
'
 
]
 
=
 
$
i
n
c
_
p
r
i
c
e
.
'
%
'
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
R
I
C
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
c
_
p
r
i
c
e
)
;

	
	
	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
E
X
T
R
A
_
I
M
A
G
E
'
 
]
 
=
 
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
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
]
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
i
m
a
g
e
s
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
[
$
e
x
-
>
u
i
d
]
[
0
]
[
'
s
m
a
l
l
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
E
X
T
R
A
_
I
M
A
G
E
'
 
]
 
=
 
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
i
m
a
g
e
s
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
[
$
e
x
-
>
u
i
d
]
[
0
]
[
'
s
m
a
l
l
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
e
x
-
>
c
h
a
r
g
a
b
l
e
d
a
i
l
y
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
E
R
N
I
G
H
T
'
 
]
 
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
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
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
E
R
N
I
G
H
T
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
e
x
-
>
c
h
a
r
g
a
b
l
e
d
a
i
l
y
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
E
R
N
I
G
H
T
'
 
]
 
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
C
O
M
_
P
E
R
D
A
Y
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
P
E
R
D
A
Y
'
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
P
E
R
N
I
G
H
T
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
e
t
s
[
 
'
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
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
C
U
S
T
O
M
T
E
X
T
_
E
X
T
R
A
D
E
S
C
'
.
$
e
x
-
>
u
i
d
,
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
e
x
-
>
d
e
s
c
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
_
d
e
t
a
i
l
s
[
 
]
 
=
 
$
e
x
t
r
a
_
d
e
e
t
s
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
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
[
'
_
J
O
M
R
E
S
_
E
X
T
R
A
S
_
T
E
M
P
L
A
T
E
'
]
 
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
E
X
T
R
A
S
_
T
E
M
P
L
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
E
X
T
R
A
S
_
T
E
M
P
L
A
T
E
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
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
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
e
x
t
r
a
s
'
,
 
$
e
x
t
r
a
_
d
e
t
a
i
l
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
s
h
o
w
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
e
x
t
r
a
s
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
_
t
e
m
p
l
a
t
e
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
e
x
t
r
a
s
_
t
e
m
p
l
a
t
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
e
t
V
a
l
s
 
=
 
$
e
x
t
r
a
s
_
t
e
m
p
l
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
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


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
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
E
X
T
R
A
S
_
T
E
M
P
L
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
E
X
T
R
A
S
_
T
E
M
P
L
A
T
E
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
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
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

