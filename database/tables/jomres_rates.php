
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
7
 
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


$
q
u
e
r
y
 
=
 
"

C
R
E
A
T
E
 
T
A
B
L
E
 
I
F
 
N
O
T
 
E
X
I
S
T
S
 
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
r
a
t
e
s
`
 
(

	
`
r
a
t
e
s
_
u
i
d
`
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
A
U
T
O
_
I
N
C
R
E
M
E
N
T
,

	
`
r
a
t
e
_
t
i
t
l
e
`
 
V
A
R
C
H
A
R
(
2
5
5
)
,

	
`
r
a
t
e
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
`
 
T
E
X
T
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
 
C
H
A
R
(
1
0
)
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
 
C
H
A
R
(
1
0
)
,

	
`
r
o
o
m
r
a
t
e
p
e
r
d
a
y
`
 
D
O
U
B
L
E
(
1
1
,
2
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
m
i
n
d
a
y
s
`
 
S
M
A
L
L
I
N
T
(
5
)
,

	
`
m
a
x
d
a
y
s
`
 
S
M
A
L
L
I
N
T
(
5
)
,

	
`
m
i
n
p
e
o
p
l
e
`
 
S
M
A
L
L
I
N
T
(
5
)
,

	
`
m
a
x
p
e
o
p
l
e
`
 
S
M
A
L
L
I
N
T
(
5
)
,

	
`
r
o
o
m
c
l
a
s
s
_
u
i
d
`
	
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
i
g
n
o
r
e
_
p
p
p
n
`
 
T
I
N
Y
I
N
T
(
1
)
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
a
l
l
o
w
_
p
h
`
 
T
I
N
Y
I
N
T
(
1
)
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
1
,

	
`
a
l
l
o
w
_
w
e
`
 
T
I
N
Y
I
N
T
(
1
)
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
1
,

	
`
w
e
e
k
e
n
d
o
n
l
y
`
 
T
I
N
Y
I
N
T
(
1
)
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
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
_
t
s
`
 
D
A
T
E
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
1
9
7
0
-
0
1
-
0
1
'
,

	
`
v
a
l
i
d
t
o
_
t
s
`
 
D
A
T
E
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
'
1
9
7
0
-
0
1
-
0
1
'
,

	
`
d
a
y
o
f
w
e
e
k
`
 
T
I
N
Y
I
N
T
(
1
)
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
7
,

	
`
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
`
 
T
I
N
Y
I
N
T
(
3
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
`
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
`
 
T
I
N
Y
I
N
T
(
3
)
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
1
0
0
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
 
I
N
T
 
U
N
S
I
G
N
E
D
 
N
O
T
 
N
U
L
L
 
D
E
F
A
U
L
T
 
0
,

	
P
R
I
M
A
R
Y
 
K
E
Y
(
`
r
a
t
e
s
_
u
i
d
`
)
,

	
I
N
D
E
X
 
`
r
o
o
m
c
l
a
s
s
_
u
i
d
`
 
(
`
r
o
o
m
c
l
a
s
s
_
u
i
d
`
)
,

	
I
N
D
E
X
 
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
 
(
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

	
)

	
E
N
G
I
N
E
 
=
 
I
n
n
o
D
B
 

	
D
E
F
A
U
L
T
 
C
H
A
R
S
E
T
 
=
 
u
t
f
8
m
b
4
 

	
C
O
L
L
A
T
E
 
=
 
u
t
f
8
m
b
4
_
u
n
i
c
o
d
e
_
c
i
;

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
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
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
 
t
h
e
 
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
a
t
e
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
)
;

}

