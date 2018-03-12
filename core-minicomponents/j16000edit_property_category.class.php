
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
6
0
0
0
e
d
i
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
c
a
t
e
g
o
r
y

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
j
o
m
r
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
_
c
a
t
e
g
o
r
i
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
a
t
e
g
o
r
i
e
s
'
)
;

	
	

 
 
 
 
 
 
 
 
$
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
i
d
 
>
 
0
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
a
t
e
g
o
r
i
e
s
-
>
g
e
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
c
a
t
e
g
o
r
y
(
$
i
d
)
;

	
	
}

 
 
 
 
 
 
 
 

	
	
$
o
u
t
p
u
t
[
 
'
I
D
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
a
t
e
g
o
r
i
e
s
-
>
i
d
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
T
I
T
L
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
a
t
e
g
o
r
i
e
s
-
>
t
i
t
l
e
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
 
=
=
 
"
1
"
)

	
	
	
{

	
	
	
$
w
i
d
t
h
=
"
9
5
%
"
;

	
	
	
$
h
e
i
g
h
t
=
"
3
5
0
"
;

	
	
	
$
c
o
l
=
"
2
0
"
;

	
	
	
$
r
o
w
=
"
1
0
"
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
e
d
i
t
o
r
A
r
e
a
T
e
x
t
(
 
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
,
 
$
j
o
m
r
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
_
c
a
t
e
g
o
r
i
e
s
-
>
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
,
 
$
w
i
d
t
h
,
 
$
h
e
i
g
h
t
,
 
$
c
o
l
,
 
$
r
o
w
 
)
;

	
	
	
}

	
	
e
l
s
e

	
	
	
$
o
u
t
p
u
t
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
b
o
x
"
 
c
o
l
s
=
"
6
0
"
 
r
o
w
s
=
"
6
"
 
n
a
m
e
=
"
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
"
>
'
.
$
j
o
m
r
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
_
c
a
t
e
g
o
r
i
e
s
-
>
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
P
A
G
E
T
I
T
L
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
P
R
O
P
E
R
T
Y
_
H
C
A
T
E
G
O
R
I
E
S
_
H
E
D
I
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
P
R
O
P
E
R
T
Y
_
H
C
A
T
E
G
O
R
I
E
S
_
H
E
D
I
T
'
,
 
f
a
l
s
e
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
H
T
I
T
L
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
R
P
O
R
T
A
L
_
C
R
A
T
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
R
P
O
R
T
A
L
_
C
R
A
T
E
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
H
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
O
M
_
M
R
_
E
X
T
R
A
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
M
R
_
E
X
T
R
A
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
;


 
 
 
 
 
 
 
 
$
j
r
t
b
a
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
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
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
;

 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
$
j
r
t
b
a
r
-
>
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
s
m
a
l
l
/
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
;

 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
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
_
A
D
M
I
N
;


 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
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
'
c
a
n
c
e
l
'
,
 
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
_
A
D
M
I
N
.
'
&
t
a
s
k
=
l
i
s
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
c
a
t
e
g
o
r
i
e
s
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
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
'
s
a
v
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
_
c
a
t
e
g
o
r
y
'
,
 
$
l
i
n
k
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
 
t
r
u
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
s
a
v
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
_
c
a
t
e
g
o
r
y
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
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
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
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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
e
d
i
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
c
a
t
e
g
o
r
y
.
h
t
m
l
'
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
d
i
s
p
l
a
y
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

