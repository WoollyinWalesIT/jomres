
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
l
a
n
g
u
a
g
e

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
m
p
B
o
o
k
i
n
g
H
a
n
d
l
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
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
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
i
s
s
e
t
(
$
_
P
O
S
T
[
 
'
j
o
m
r
e
s
l
a
n
g
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
=
 
(
s
t
r
i
n
g
)
 
R
e
m
o
v
e
X
S
S
(
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
P
O
S
T
,
 
'
j
o
m
r
e
s
l
a
n
g
'
,
 
'
'
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
i
s
s
e
t
(
$
_
G
E
T
[
 
'
j
o
m
r
e
s
l
a
n
g
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
=
 
(
s
t
r
i
n
g
)
 
R
e
m
o
v
e
X
S
S
(
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
j
o
m
r
e
s
l
a
n
g
'
,
 
'
'
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
i
s
s
e
t
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
[
 
'
j
o
m
r
e
s
l
a
n
g
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
=
 
(
s
t
r
i
n
g
)
 
R
e
m
o
v
e
X
S
S
(
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
j
o
m
r
e
s
l
a
n
g
'
,
 
'
'
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
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
=
 
(
s
t
r
i
n
g
)
 
R
e
m
o
v
e
X
S
S
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
c
m
s
l
a
n
g
(
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
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
=
 
'
e
n
-
G
B
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
_
c
r
o
s
s
r
e
f
 
=
 
$
t
h
i
s
-
>
d
e
f
i
n
e
_
l
a
n
g
f
i
l
e
_
t
o
_
l
a
n
g
u
a
g
e
s
_
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
d
a
t
e
p
i
c
k
e
r
_
c
r
o
s
s
r
e
f
 
=
 
$
t
h
i
s
-
>
d
e
f
i
n
e
_
l
a
n
g
f
i
l
e
_
t
o
_
d
a
t
e
p
i
c
k
e
r
_
f
i
l
e
s
_
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
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
,
 
$
l
a
n
g
f
i
l
e
_
c
r
o
s
s
r
e
f
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
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
t
o
_
l
o
n
g
c
o
d
e
(
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
l
a
n
g
[
 
'
j
o
m
r
e
s
l
a
n
g
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
C
o
n
f
i
g
_
l
a
n
g
;


 
 
 
 
 
 
 
 
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
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
;

	
	
$
t
h
i
s
-
>
d
a
t
e
p
i
c
k
e
r
_
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
d
a
t
e
p
i
c
k
e
r
_
c
r
o
s
s
r
e
f
[
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
l
a
n
g
 
]
;


 
 
 
 
 
 
 
 
/
/
s
e
t
 
l
a
n
g
 
s
h
o
w
t
i
m
e
,
 
e
g
:
 
e
n
-
G
B

 
 
 
 
 
 
 
 
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
l
a
n
g
'
,
 
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
d
a
t
e
p
i
c
k
e
r
_
l
a
n
g
'
,
 
$
t
h
i
s
-
>
d
a
t
e
p
i
c
k
e
r
_
l
a
n
g
)
;


 
 
 
 
 
 
 
 
/
/
s
e
t
 
l
a
n
g
 
s
h
o
r
t
c
o
d
e
 
s
h
o
w
t
i
m
e
,
 
e
g
:
 
e
n

 
 
 
 
 
 
 
 
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
_
s
h
o
r
t
c
o
d
e
s
(
)
;

 
 
 
 
 
 
 
 
$
k
e
y
 
=
 
a
r
r
a
y
_
s
e
a
r
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
C
o
n
f
i
g
_
l
a
n
g
,
 
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
s
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
l
a
n
g
_
s
h
o
r
t
c
o
d
e
'
,
 
$
k
e
y
)
;


	
	
/
/
s
e
l
e
c
t
e
d
 
l
a
n
g
u
a
g
e
s

	
	
$
t
h
i
s
-
>
s
e
l
e
c
t
e
d
_
l
a
n
g
u
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
s
e
l
e
c
t
e
d
_
l
a
n
g
u
a
g
e
s
'
]
 
!
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
s
e
l
e
c
t
e
d
_
l
a
n
g
u
a
g
e
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
,
'
,
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
s
e
l
e
c
t
e
d
_
l
a
n
g
u
a
g
e
s
'
]
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
s
e
l
e
c
t
e
d
_
l
a
n
g
u
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
_
k
e
y
s
(
$
l
a
n
g
f
i
l
e
_
c
r
o
s
s
r
e
f
)
;

	
	
}

 
 
 
 
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
l
a
n
g
u
a
g
e
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
t
y
p
e
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
l
o
a
d
 
t
h
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
 
s
p
e
c
i
f
i
c
 
l
a
n
g
u
a
g
e
 
f
i
l
e
.
 
I
f
 
i
t
 
d
o
e
s
n
`
t
 
e
x
i
s
t
,
 
d
o
 
n
o
t
h
i
n
g
,
 
s
o
 
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
 
l
a
n
g
u
a
g
e
 
s
t
r
i
n
g
s
 
w
i
l
l
 
b
e
 
u
s
e
d

 
 
 
 
 
 
 
 
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
t
y
p
e
 
!
=
 
'
'
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
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
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
p
r
o
p
e
r
t
y
_
t
y
p
e
)
.
J
R
D
S
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
.
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
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
p
r
o
p
e
r
t
y
_
t
y
p
e
)
.
J
R
D
S
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
.
'
.
p
h
p
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
 
e
l
s
e
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
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
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
p
r
o
p
e
r
t
y
_
t
y
p
e
)
.
J
R
D
S
.
'
e
n
-
G
B
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
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
p
r
o
p
e
r
t
y
_
t
y
p
e
)
.
J
R
D
S
.
'
e
n
-
G
B
.
p
h
p
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
l
o
a
d
 
l
a
n
g
u
a
g
e
 
c
o
n
t
e
x
t
 
l
a
n
g
u
a
g
e
 
f
i
l
e
 
i
f
 
n
o
 
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
p
e
c
i
f
i
c
 
l
a
n
g
u
a
g
e
 
f
i
l
e
 
f
o
u
n
d
 
a
b
o
v
e

 
 
 
 
 
 
 
 
 
 
 
 
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
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
 
]
 
!
=
 
'
'
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
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
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
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
 
]
.
J
R
D
S
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
.
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
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
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
 
]
.
J
R
D
S
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
.
'
.
p
h
p
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
 
e
l
s
e
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
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
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
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
 
]
.
J
R
D
S
.
'
e
n
-
G
B
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
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
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
 
]
.
J
R
D
S
.
'
e
n
-
G
B
.
p
h
p
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


 
 
 
 
 
 
 
 
 
 
 
 
/
/
i
f
 
s
t
i
l
l
 
n
o
t
h
i
n
g
 
f
o
u
n
d
,
 
l
o
a
d
 
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
 
l
a
n
g
u
a
g
e
 
f
i
l
e

 
 
 
 
 
 
 
 
 
 
 
 
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
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
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
.
'
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
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
.
'
.
p
h
p
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
 
e
l
s
e
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
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
'
e
n
-
G
B
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
P
A
T
H
_
B
A
S
E
.
J
R
D
S
.
'
l
a
n
g
u
a
g
e
'
.
J
R
D
S
.
'
e
n
-
G
B
.
p
h
p
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
 
f
a
l
s
e
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
l
a
n
g
u
a
g
e
s
e
l
e
c
t
i
o
n
_
d
r
o
p
d
o
w
n
(
$
c
o
n
f
i
g
_
o
p
t
i
o
n
 
=
 
f
a
l
s
e
,
 
$
d
e
f
a
u
l
t
_
l
a
n
g
 
=
 
'
'
)

 
 
 
 
{

	
	
$
l
a
n
g
f
i
l
e
_
o
p
t
i
o
n
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
l
a
n
g
u
a
g
e
_
n
a
m
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
d
e
f
i
n
e
_
l
a
n
g
f
i
l
e
_
t
o
_
l
a
n
g
u
a
g
e
s
_
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
e
m
p
t
y
(
$
t
h
i
s
-
>
s
e
l
e
c
t
e
d
_
l
a
n
g
u
a
g
e
s
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
t
h
i
s
-
>
s
e
l
e
c
t
e
d
_
l
a
n
g
u
a
g
e
s
 
a
s
 
$
l
a
n
g
_
c
o
d
e
)
 
{

	
	
	
	
$
l
a
n
g
f
i
l
e
_
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
l
a
n
g
_
c
o
d
e
,
 
$
l
a
n
g
u
a
g
e
_
n
a
m
e
s
[
$
l
a
n
g
_
c
o
d
e
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

	
	
	
f
o
r
e
a
c
h
 
(
$
l
a
n
g
u
a
g
e
_
n
a
m
e
s
 
a
s
 
$
l
a
n
g
_
c
o
d
e
 
=
>
 
$
l
a
n
g
_
n
a
m
e
)
 
{

	
	
	
	
$
l
a
n
g
f
i
l
e
_
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
l
a
n
g
_
c
o
d
e
,
 
$
l
a
n
g
_
n
a
m
e
)
;

	
	
	
}

	
	
}


 
 
 
 
 
 
 
 
i
f
 
(
!
$
c
o
n
f
i
g
_
o
p
t
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
'
o
n
c
h
a
n
g
e
=
"
t
h
i
s
.
f
o
r
m
.
s
u
b
m
i
t
(
)
;
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
p
u
t
_
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
l
a
n
g
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
p
u
t
_
n
a
m
e
 
=
 
'
c
f
g
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
a
n
g
u
a
g
e
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
d
e
f
a
u
l
t
_
l
a
n
g
 
!
=
 
'
'
 
&
&
 
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
d
e
f
a
u
l
t
_
l
a
n
g
,
 
$
l
a
n
g
f
i
l
e
_
c
r
o
s
s
r
e
f
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
 
=
 
$
d
e
f
a
u
l
t
_
l
a
n
g
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
l
a
n
g
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
d
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
l
a
n
g
f
i
l
e
_
o
p
t
i
o
n
s
,
 
$
i
n
p
u
t
_
n
a
m
e
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
 
'
.
$
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
.
'
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
l
a
n
g
)
;


 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
h
t
m
l
 
=
 
'
'
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
c
o
n
f
i
g
_
o
p
t
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
h
t
m
l
 
=
 
'
<
f
o
r
m
 
a
c
t
i
o
n
=
"
"
 
m
e
t
h
o
d
=
"
p
o
s
t
"
 
n
a
m
e
=
"
j
o
m
r
e
s
l
a
n
g
"
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
h
t
m
l
 
.
=
 
$
d
r
o
p
d
o
w
n
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
c
o
n
f
i
g
_
o
p
t
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
h
t
m
l
 
.
=
 
'
<
/
f
o
r
m
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
s
e
l
e
c
t
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
 
d
e
f
i
n
e
_
l
a
n
g
f
i
l
e
_
t
o
_
l
a
n
g
u
a
g
e
s
_
a
r
r
a
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
l
a
n
g
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
l
a
n
g
s
[
 
'
a
r
-
A
R
'
 
]
 
=
 
'
A
r
g
e
n
t
i
n
o
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
b
g
-
B
G
'
 
]
 
=
 
'
B
u
l
g
a
r
i
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
n
-
G
B
'
 
]
 
=
 
'
E
n
g
l
i
s
h
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
c
s
-
C
Z
'
 
]
 
=
 
'
C
z
e
c
h
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
d
a
-
D
K
'
 
]
 
=
 
'
D
a
n
s
k
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
d
e
-
D
E
'
 
]
 
=
 
'
D
e
u
t
s
c
h
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
l
-
G
R
'
 
]
 
=
 
'
Î
•
Î
»
Î
»
Î
·
Î
½
Î
¹
Î
º
Î
¬
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
n
-
C
A
'
 
]
 
=
 
'
C
a
n
a
d
i
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
n
-
U
S
'
 
]
 
=
 
'
A
m
e
r
i
c
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
s
-
E
S
'
 
]
 
=
 
'
E
s
p
a
Ã
±
o
l
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
f
r
-
F
R
'
 
]
 
=
 
'
F
r
a
n
Ã
§
a
i
s
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
h
e
-
I
L
'
 
]
 
=
 
'
×
¢
×
‘
×
¨
×
™
×
ª
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
h
r
-
H
R
'
 
]
 
=
 
'
C
r
o
a
t
i
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
h
u
-
H
U
'
 
]
 
=
 
'
H
u
n
g
a
r
i
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
i
t
-
I
T
'
 
]
 
=
 
'
I
t
a
l
i
a
n
o
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
l
v
-
L
V
'
 
]
 
=
 
'
L
a
t
v
i
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
n
b
-
N
O
'
 
]
 
=
 
'
N
o
r
s
k
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
n
l
-
N
L
'
 
]
 
=
 
'
N
e
d
e
r
l
a
n
d
s
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
p
l
-
P
L
'
 
]
 
=
 
'
P
o
l
s
k
i
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
p
t
-
B
R
'
 
]
 
=
 
'
P
o
r
t
u
g
u
Ã
ª
s
 
B
r
a
s
i
l
e
i
r
o
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
p
t
-
P
T
'
 
]
 
=
 
'
P
o
r
t
u
g
u
Ã
ª
s
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
r
o
-
R
O
'
 
]
 
=
 
'
R
o
m
a
n
i
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
r
u
-
R
U
'
 
]
 
=
 
'
R
u
s
s
i
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
k
-
S
K
'
 
]
 
=
 
'
S
l
o
v
a
k
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
l
-
S
I
'
 
]
 
=
 
'
S
l
o
v
e
n
i
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
r
-
Y
U
'
 
]
 
=
 
'
S
r
p
s
k
i
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
z
h
-
C
N
'
 
]
 
=
 
'
C
h
i
n
e
s
e
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
t
h
-
T
H
'
 
]
 
=
 
'
T
h
a
i
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
v
-
S
E
'
 
]
 
=
 
'
S
v
e
n
s
k
a
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
a
r
-
A
A
'
 
]
 
=
 
'
Ø
§
Ù
„
Ø
¹
Ø
±
Ø
¨
Ù
Š
Ø
©
 
Ø
§
Ù
„
Ù
…
Ù
ˆ
Ø
­
Ø
¯
Ø
©
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
c
a
-
E
S
'
 
]
 
=
 
'
C
a
t
a
l
a
n
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
j
a
-
J
P
'
 
]
 
=
 
'
æ
—
¥
æ
œ
¬
è
ª
ž
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
u
k
-
U
A
'
 
]
 
=
 
'
Ð
£
Ð
º
Ñ
€
Ð
°
Ñ
—
Ð
½
Ñ

Ñ
Œ
Ð
º
Ð
¸
Ð
¹
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
f
a
-
I
R
'
 
]
 
=
 
'
Ù

Ø
§
Ø
±
Ø
³
Û
Œ
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
a
z
-
A
Z
'
 
]
 
=
 
'
A
z
É
™
r
b
a
y
c
a
n
 
d
i
l
i
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
t
r
-
T
R
'
 
]
 
=
 
'
T
Ã
¼
r
k
Ã
§
e
'
;

	
	
$
l
a
n
g
s
[
 
'
h
y
-
A
M
'
 
]
 
=
 
'
Õ
°
Õ
¡
Õ
µ
Õ
¥
Ö
€
Õ
¥
Õ
¶
'
;

	
	

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
l
a
n
g
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
 
g
e
t
_
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
t
o
_
l
o
n
g
c
o
d
e
(
$
l
a
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
s
h
o
r
t
c
o
d
e
s
[
 
$
l
a
n
g
 
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
s
[
 
$
l
a
n
g
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
e
n
-
G
B
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
h
o
r
t
c
o
d
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
l
a
n
g
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
l
a
n
g
s
[
 
'
a
r
'
 
]
 
=
 
'
a
r
-
A
R
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
b
g
'
 
]
 
=
 
'
b
g
-
B
G
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
n
'
 
]
 
=
 
'
e
n
-
G
B
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
c
s
'
 
]
 
=
 
'
c
s
-
C
Z
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
d
a
'
 
]
 
=
 
'
d
a
-
D
K
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
d
e
'
 
]
 
=
 
'
d
e
-
D
E
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
l
'
 
]
 
=
 
'
e
l
-
G
R
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
s
'
 
]
 
=
 
'
e
s
-
E
S
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
f
r
'
 
]
 
=
 
'
f
r
-
F
R
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
h
e
'
 
]
 
=
 
'
h
e
-
I
L
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
h
r
'
 
]
 
=
 
'
h
r
-
H
R
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
h
u
'
 
]
 
=
 
'
h
u
-
H
U
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
i
t
'
 
]
 
=
 
'
i
t
-
I
T
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
l
v
'
 
]
 
=
 
'
l
v
-
L
V
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
n
b
'
 
]
 
=
 
'
n
b
-
N
O
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
n
l
'
 
]
 
=
 
'
n
l
-
N
L
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
p
l
'
 
]
 
=
 
'
p
l
-
P
L
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
b
r
'
 
]
 
=
 
'
p
t
-
B
R
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
p
t
'
 
]
 
=
 
'
p
t
-
P
T
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
r
o
'
 
]
 
=
 
'
r
o
-
R
O
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
r
u
'
 
]
 
=
 
'
r
u
-
R
U
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
k
'
 
]
 
=
 
'
s
k
-
S
K
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
l
'
 
]
 
=
 
'
s
l
-
S
I
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
r
'
 
]
 
=
 
'
s
r
-
Y
U
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
z
h
'
 
]
 
=
 
'
z
h
-
C
N
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
n
o
'
 
]
 
=
 
'
n
b
-
N
O
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
t
h
'
 
]
 
=
 
'
t
h
-
T
H
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
v
'
 
]
 
=
 
'
s
v
-
S
E
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
a
r
'
 
]
 
=
 
'
a
r
-
A
A
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
c
a
'
 
]
 
=
 
'
c
a
-
E
S
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
j
a
'
 
]
 
=
 
'
j
a
-
J
P
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
u
k
'
 
]
 
=
 
'
u
k
-
U
A
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
f
a
'
 
]
 
=
 
'
f
a
-
I
R
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
a
z
'
 
]
 
=
 
'
a
z
-
A
Z
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
t
r
'
 
]
 
=
 
'
t
r
-
T
R
'
;

	
	
$
l
a
n
g
s
[
 
'
h
y
'
 
]
 
=
 
'
h
y
-
A
M
'
;

	
	


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
l
a
n
g
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
 
d
e
f
i
n
e
_
l
a
n
g
f
i
l
e
_
t
o
_
d
a
t
e
p
i
c
k
e
r
_
f
i
l
e
s
_
a
r
r
a
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
l
a
n
g
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
l
a
n
g
s
[
 
'
a
r
-
A
R
'
 
]
 
=
 
'
a
r
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
b
g
-
B
G
'
 
]
 
=
 
'
b
g
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
n
-
G
B
'
 
]
 
=
 
'
e
n
-
G
B
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
c
s
-
C
Z
'
 
]
 
=
 
'
c
s
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
d
a
-
D
K
'
 
]
 
=
 
'
d
a
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
d
e
-
D
E
'
 
]
 
=
 
'
d
e
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
l
-
G
R
'
 
]
 
=
 
'
e
l
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
n
-
C
A
'
 
]
 
=
 
'
e
n
-
G
B
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
n
-
U
S
'
 
]
 
=
 
'
e
n
-
G
B
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
e
s
-
E
S
'
 
]
 
=
 
'
e
s
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
f
r
-
F
R
'
 
]
 
=
 
'
f
r
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
h
e
-
I
L
'
 
]
 
=
 
'
h
e
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
h
r
-
H
R
'
 
]
 
=
 
'
h
r
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
h
u
-
H
U
'
 
]
 
=
 
'
h
u
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
i
t
-
I
T
'
 
]
 
=
 
'
i
t
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
l
v
-
L
V
'
 
]
 
=
 
'
l
v
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
n
b
-
N
O
'
 
]
 
=
 
'
n
o
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
n
l
-
N
L
'
 
]
 
=
 
'
n
l
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
p
l
-
P
L
'
 
]
 
=
 
'
p
l
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
p
t
-
B
R
'
 
]
 
=
 
'
p
t
-
B
R
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
p
t
-
P
T
'
 
]
 
=
 
'
p
t
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
r
o
-
R
O
'
 
]
 
=
 
'
r
o
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
r
u
-
R
U
'
 
]
 
=
 
'
r
u
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
k
-
S
K
'
 
]
 
=
 
'
s
k
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
l
-
S
I
'
 
]
 
=
 
'
s
l
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
r
-
Y
U
'
 
]
 
=
 
'
s
r
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
z
h
-
C
N
'
 
]
 
=
 
'
z
h
-
C
N
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
t
h
-
T
H
'
 
]
 
=
 
'
t
h
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
s
v
-
S
E
'
 
]
 
=
 
'
s
v
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
a
r
-
A
A
'
 
]
 
=
 
'
a
r
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
c
a
-
E
S
'
 
]
 
=
 
'
c
a
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
j
a
-
J
P
'
 
]
 
=
 
'
j
a
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
u
k
-
U
A
'
 
]
 
=
 
'
u
k
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
f
a
-
I
R
'
 
]
 
=
 
'
f
a
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
a
z
-
A
Z
'
 
]
 
=
 
'
a
z
'
;

 
 
 
 
 
 
 
 
$
l
a
n
g
s
[
 
'
t
r
-
T
R
'
 
]
 
=
 
'
t
r
'
;

	
	
$
l
a
n
g
s
[
 
'
h
y
-
A
M
'
 
]
 
=
 
'
h
y
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
l
a
n
g
s
;

 
 
 
 
}

}

