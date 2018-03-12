
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
1
0
5
0
1
i
n
p
u
t
_
f
i
l
t
e
r
i
n
g

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
P
a
n
e
l
 
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
P
a
n
e
l
'
 
]
;

 
 
 
 
 
 
 
 
$
l
i
s
t
s
 
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
l
i
s
t
s
'
 
]
;

 
 
 
 
 
 
 
 
$
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
_
d
r
o
p
d
o
w
n
 
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
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
_
d
r
o
p
d
o
w
n
'
 
]
;

	
	

	
	
$
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
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
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
I
N
P
U
T
F
I
L
T
E
R
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
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
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
L
L
O
W
H
T
M
L
E
D
I
T
O
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
C
O
M
_
A
L
L
O
W
H
T
M
L
E
D
I
T
O
R
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
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
a
l
l
o
w
H
T
M
L
e
d
i
t
o
r
'
 
]
)
;

	
	
$
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
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
L
L
O
W
H
T
M
L
E
D
I
T
O
R
_
D
E
S
C
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
L
L
O
W
H
T
M
L
E
D
I
T
O
R
_
D
E
S
C
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
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
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
h
t
m
l
_
p
u
r
i
f
i
e
r
_
a
l
l
o
w
e
d
_
t
a
g
s
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
h
t
m
l
_
p
u
r
i
f
i
e
r
_
a
l
l
o
w
e
d
_
t
a
g
s
'
 
]
 
=
 
'
p
,
b
,
s
t
r
o
n
g
,
a
[
h
r
e
f
]
,
i
,
i
m
g
[
s
r
c
]
'
;

	
	
}


	
	
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
i
n
p
u
t
s
_
a
l
l
o
w
i
n
g
_
h
t
m
l
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
i
n
p
u
t
s
_
a
l
l
o
w
i
n
g
_
h
t
m
l
'
 
]
 
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
h
e
c
k
i
n
_
t
i
m
e
s
 
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
 
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
 
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
 
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
 
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
e
m
a
i
l
_
t
e
x
t
 
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
;

	
	
}

	
	

	
	
$
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
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
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
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
_
d
r
o
p
d
o
w
n
)
;

	
	
$
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
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
D
E
S
C
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
D
E
S
C
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
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
$
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
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
P
U
R
I
F
I
E
R
_
A
L
L
O
W
E
D
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
P
U
R
I
F
I
E
R
_
A
L
L
O
W
E
D
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
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
t
e
x
t
a
r
e
a
 
t
y
p
e
=
"
t
e
x
t
"
 
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
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
h
t
m
l
_
p
u
r
i
f
i
e
r
_
a
l
l
o
w
e
d
_
t
a
g
s
"
 
>
'
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
h
t
m
l
_
p
u
r
i
f
i
e
r
_
a
l
l
o
w
e
d
_
t
a
g
s
'
 
]
.
'
 
<
/
t
e
x
t
a
r
e
a
>
'
)
;

	
	
$
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
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
P
U
R
I
F
I
E
R
_
A
L
L
O
W
E
D
_
D
E
S
C
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
P
U
R
I
F
I
E
R
_
A
L
L
O
W
E
D
_
D
E
S
C
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
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
$
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
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
I
N
P
U
T
S
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
I
N
P
U
T
S
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
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
t
e
x
t
a
r
e
a
 
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
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
i
n
p
u
t
s
_
a
l
l
o
w
i
n
g
_
h
t
m
l
"
 
>
'
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
i
n
p
u
t
s
_
a
l
l
o
w
i
n
g
_
h
t
m
l
'
 
]
.
'
<
/
t
e
x
t
a
r
e
a
>
'
)
;

	
	
$
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
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
I
N
P
U
T
S
_
D
E
S
C
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
I
N
P
U
T
S
_
D
E
S
C
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
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	

	
	
$
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
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;

 
 
 
 
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
 
n
u
l
l
;

 
 
 
 
}

}

